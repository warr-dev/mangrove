<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index()
    {
        $users=User::where('usertype','user')->get();
        return view('admin.user.index',compact('users'));
    }
    public function destroy(User $user)
    {
        if($user->delete()){
            return response([
                'status'=>'success',
                'message'=>'deleted successfully'
            ]);
        }
    }
    public function edit(User $user)
    {
        $view=view('admin.user.edit',compact('user'))->render();
        return response([
            'status'=>'success',
            'view'=>$view
        ]);
    }
    public function update(Request $request,User $user)
    {
        $data=$request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required_without:phone', 'email', 'max:255','nullable'],
            'phone' => ['required_without:email', 'unique:users','nullable'  ],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],

            'first_name'=>['required', 'string', 'max:255'],
            'middle_name'=>['nullable', 'string', 'max:255'],
            'last_name'=>['required', 'string', 'max:255'],
            'province'=>['required', 'string', 'max:255'],
            'city'=>['required', 'string', 'max:255'],
            'zipcode'=>['required', 'string', 'max:255'],
            'barangay'=>['required', 'string', 'max:255'],
            'gender'=>['required', 'string', 'max:255'],
        ]);
        $user->update($data);
        $user->profile->update($data);
        return response([
            'status'=>'success',
            'message'=>'updated successfully'
        ]);
    }
    public function approve(User $user)
    {
        $user->status='active';
        $user->save();
        return response([
            'status'=>'success',
            'user'=>$user,
            'message'=>'User was Approved!'
        ]);
    }
    
    public function decline(User $user)
    {
        $user->status='declined';
        $user->save();
        return response([
            'status'=>'success',
            'user'=>$user,
            'message'=>'User was Declined!'
        ]);
    }
    
    public function suspend(User $user)
    {
        $user->status='inactive';
        $user->save();
        return response([
            'status'=>'success',
            'user'=>$user,
            'message'=>'User was Suspended!'
        ]);
    }
    
    public function active(User $user)
    {
        $user->status='active';
        $user->save();
        return response([
            'status'=>'success',
            'user'=>$user,
            'message'=>'User was Activated!'
        ]);
    }
    public function view()
    {
        $user=auth()->user();
        return view('user.account',compact('user'));
    }
    public function updateMyAccount(Request $request)
    {
        
        $me=User::find(auth()->user()->id);
        $me->username=$request->username;
        // $me->password=$request->password;
        $me->email=$request->email;
        $me->phone=$request->phone;
        $me->profile->first_name=$request->first_name;
        $me->profile->middle_name=$request->middle_name;
        $me->profile->last_name=$request->last_name;
        $me->profile->province=$request->province;
        $me->profile->city=$request->city;
        $me->profile->zipcode=$request->zipcode;
        $me->profile->barangay=$request->barangay;
        $me->profile->gender=$request->gender;
        $me->push();
        
        return response([
            'message'=>'Profile updated',
            'status'=>'success'
        ],200);
    }
}
