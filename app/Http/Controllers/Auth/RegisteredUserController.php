<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Http\Requests\Auth\RegisterRequest;

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
        // $request->validate([
        //     'username' => ['required', 'string', 'max:255', 'unique:users'],
        //     'email' => ['required_without:phone', 'string', 'email', 'max:255', 'unique:users'],
        //     'phone' => ['required_without:email', 'string', 'numeric', 'unique:users'],
        //     'password' => ['required', 'confirmed', Rules\Password::defaults()],
        // ]);

        $user = User::create(
            array_merge(
                $request->validated(),
                [
                    'usertype'=>'user',
                    'password'=>Hash::make($request->input('password'))
                ]));

        event(new Registered($user));

        Auth::login($user);

        // return redirect(RouteServiceProvider::HOME);
        return redirect()->route(auth()->user()->usertype.'.home');
    }
}
