<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function home()
    {
        return view(auth()->user()->usertype.'.home');
    }
    public function landing()
    {
        return view('home');
    }
}
