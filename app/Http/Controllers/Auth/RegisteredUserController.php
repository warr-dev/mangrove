<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profile;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Auth\RegisterRequest;
use Exception;
use Illuminate\Support\Facades\DB;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register1');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RegisterRequest $request)
    {
        try 
        {
            DB::beginTransaction();
            $user = User::create(
                array_merge(
                    $request->validated(),
                    [
                        'usertype'=>'user',
                        'password'=>Hash::make($request->input('password'))
                    ]));
            if($user){
                if(Profile::create(array_merge($request->validated(),[
                    'user_id'=> $user->id
                ]))){
                    event(new Registered($user));
            
                    // Auth::login($user);
                    DB::commit();
            
                    // return redirect(RouteServiceProvider::HOME);
                    // return redirect()->route(auth()->user()->usertype.'.home');
                    return redirect()->route('login')->with('message','Registration Successful, wait for approval of account');
                }
            }
        }
        catch(Exception $e)
        {
            DB::rollback();
            return back()->with('message', 'Error: '.$e->getMessage());
        }

        

    }

}
