<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donations;
use App\Models\Guest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Psr\Log\NullLogger;

class DonationController extends Controller
{
    public function addDonation()
    {
        return view('donation');
    }
    public function index()
    {
        $donations=Donations::all();
        // dd(Donations::all());
        // $donations=[];
        return view('admin.donation',compact('donations'));
    }
    public function store(Request $request)
    {
        $validations=[
            'mode'=>'required',
            'amount'=>['required','numeric'],
            'coverfees'=>'',
            'gcash_number'=>['required','numeric'],
            'reference_number'=>'required',
            // 'photo'=>'required',
        ];
        $user_id=null;
        if(!auth()->check()){
            $validations['first_name']='required';
            $validations['middle_name']='required';
            $validations['last_name']='required';
            $validations['province']='required';
            $validations['city']='required';
            $validations['zipcode']=['required','numeric'];
            $validations['barangay']='required';
            $validations['email']=['required','email'];
            $validations['phone']=['required','numeric'];
        }else 
            $user_id=auth()->user()->id;  
        $data=$request->validate($validations);
        if(!auth()->check()){
            $guest=Guest::create($request->all());
            $user_id=$guest->id;
        }
        $donation=Donations::create(array_merge($data,
            [
                // 'photo'=>$request->file('photo')->store('donations','public'),
                'user_id'=>$user_id,
                'transaction_type'=>auth()->check()?'App\Models\User':'App\Models\Guest'
            ]
        ));
        return response([
            'status'=>'success',
            'message'=>'added successfully'
        ]);
    }
}

