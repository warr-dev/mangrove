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
use PDF;

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
        
        $classBD=Reservation::getCounts([date('Y-m-01'), Carbon::now()->endOfMonth()->format('Y-m-d')]);
        // $classes=[];
        // foreach($classBD as $class){
        //     $classes[$class->class]=$class->count;
        // };
        // dd($classes);
        return view(auth()->user()->usertype.'.home',compact('counters','classBD'));
    }
    public function landing(Request $request)
    {
        $galleries=$request->s?Gallery::where('description','like',"%".$request->s."%")->orWhere('name','like',"%".$request->s."%")->get():Gallery::all();
        $news=$request->s?LocalNews::where('details','like',"%".$request->s."%")->orWhere('title','like',"%".$request->s."%")->get():LocalNews::all();
        $advisories=$request->s?Advisory::where('details','like',"%".$request->s."%")->orWhere('title','like',"%".$request->s."%")->get():Advisory::all();
        $advertisements=$request->s?Advertisement::where('details','like',"%".$request->s."%")->orWhere('title','like',"%".$request->s."%")->get():Advertisement::all();
        $reviews=Review::orderBy('created_at','desc')->limit(3)->get();
        return view('home',compact('galleries','news','advertisements','reviews', 'advisories'));

    }
    public function report()
    {
        $classes=[ 'regular','student','senior','foreign','resident'];
        $start = Carbon::now()->startOfMonth();
        $end = Carbon::now()->endOfMonth();
        
        $date = $start;
        $reservations=[];
        while ($date <= $end) {
            $reservation=Reservation::getCounts($date->format('Y-m-d'),true);
            if($reservation){
                $reservations[$date->format('Y-m-d')]=$reservation;
            }
            $date->addDays(1);
        }
        // dd($reservations);
        $data = [
            'reservations' => $reservations,
            'date' => date('m/d/Y')
        ];
           
        $pdf = PDF::loadView('reports.report', $data);
     
        return $pdf->stream();
    }
}
