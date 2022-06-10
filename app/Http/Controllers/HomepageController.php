<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\LocalNews;
use App\Models\Advertisement;
use App\Models\Review;

class HomepageController extends Controller
{
    public function home()
    {
        return view(auth()->user()->usertype.'.home');
    }
    public function landing()
    {
        $galleries=Gallery::all();
        $news=LocalNews::all();
        $advertisements=Advertisement::all();
        $reviews=Review::orderBy('created_at','desc')->limit(3)->get();
        return view('home',compact('galleries','news','advertisements','reviews'));

    }
}
