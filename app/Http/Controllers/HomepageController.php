<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\LocalNews;
use App\Models\Advertisement;
use App\Models\Advisory;
use App\Models\Donations;
use App\Models\Pax;
use App\Models\Reservation;
use App\Models\Review;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class HomepageController extends Controller
{
    public function home(Request $request)
    {
        $counters=[
            'users'=>User::count(),
            'reservations'=>Reservation::count(),
            'donations'=> ['count'=>Donations::count(), 'sum'=>Donations::sum('amount')]
        ];
        // $month=$request->month??date('m');
        // if(){

            // $counters['reservations']=Reservation::whereRaw('month(date_visit) = '.$month)->count();
            // $counters['donations']=Donations::whereRaw('month(created_at) = '.$month)->count();
        // }
        $classBD=Pax::selectRaw('class,count(*) as count')->groupBy('class')->get();
        $classes=[];
        foreach($classBD as $class){
            $classes[$class->class]=$class->count;
        };
        return view(auth()->user()->usertype.'.home',compact('counters','classes'));
    }
    public function landing()
    {
        $galleries=Gallery::all();
        $news=LocalNews::all();
        $advisories=Advisory::all();
        $advertisements=Advertisement::all();
        $reviews=Review::orderBy('created_at','desc')->limit(3)->get();
        return view('home',compact('galleries','news','advertisements','reviews', 'advisories'));

    }
}
