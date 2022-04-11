<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donations;

class DonationController extends Controller
{
    public function addDonation()
    {
        return view('user.donation');
    }
    public function index()
    {
        // $donations=Donations::all();
        $donations=[];
        return view('admin.donation',compact('donations'));
    }   
}

