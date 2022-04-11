<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function addDonation()
    {
        return view('user.donation');
    }
    public function index()
    {
        return view('admin.donation');
    }   
}
