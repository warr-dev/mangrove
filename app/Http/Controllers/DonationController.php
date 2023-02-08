<?php

namespace App\Http\Controllers;

use App\Mail\DonationMail;
use Illuminate\Http\Request;
use App\Models\Donations;
use App\Models\Guest;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Psr\Log\NullLogger;

use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;

class DonationController extends Controller
{
    public function addDonation()
    {
        // dd(Donations::all());
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
            'photo'=>'',
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
        }else if(auth()->user()->isAdmin()){
            $validations['first_name']='required';
            $validations['middle_name']='required';
            $validations['last_name']='required';
            $validations['province']='required';
            $validations['city']='required';
            $validations['zipcode']=['required','numeric'];
            $validations['barangay']='required';
            $validations['email']=['required','email'];
            $validations['phone']=['required','numeric'];
        }
        else 
            $user_id=auth()->user()->id;  
        $data=$request->validate($validations);
        if(!auth()->check()){
            $guest=Guest::create($request->all());
            $user_id=$guest->id;
        }else if(auth()->user()->isAdmin()){
            $guest=Guest::create($request->all());
            $user_id=$guest->id;
            $data['status']='confirmed';
        }
        $donation=Donations::create(array_merge($data,
            [
                'photo'=>$request->file('photo')->store('payments/donations','public'),
                'user_id'=>$user_id,
                'transaction_type'=>auth()->check()&&!auth()->user()->isAdmin()?'App\Models\User':'App\Models\Guest'
            ]
        ));
        // $d=Mail::to($donation->donator->email)->send(new DonationMail($donation));
        return response([
            'status'=>'success',
            'message'=>'added successfully'
        ]);
        
    }
    
    public function confirm(Donations $donation)
    {
        $donation->update(['status'=>'confirmed']);
        
        $d=Mail::to($donation->donator->email)->send(new donationMail($donation));
        return response([
            'data'=>$donation,
            'message'=>'Donation Successfully Confirmed'
        ],200);
    }
    public function reject(Donations $donation)
    {
        $donation->update(['status'=>'rejected']);
        return response([
            'data'=>$donation,
            'message'=>'Donation Successfully Rejected'
        ],200);
    }
}

