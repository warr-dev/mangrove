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
        $reports=[
            'daily',
            'monthly',
            'yearly'
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
        return view(auth()->user()->usertype.'.home',compact('counters','classBD','reports'));
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
    public function reservationReport($type, $start, $end)
    {
        // dd(Reservation::all());
        $classes=[ 'regular','student','senior','foreign','resident'];
        // $start = Carbon::now()->startOfMonth();
        // $end = Carbon::now()->endOfMonth();
        $start=Carbon::parse($start);
        $end=Carbon::parse($end);
        $date = $start;
        $reservations=[];
        while ($date <= $end) {
            switch($type){
                case 'daily':
                    $reservation=Reservation::getCounts($date->format('Y-m-d'),true);
                    if($reservation){
                        $reservations[$date->format('Y-m-d')]=$reservation;
                    }
                    $date->addDays(1);
                    break;
                case 'monthly':
                    $reservation=Reservation::getCounts([$date->format('Y-m-d'),$date->endOfMonth()->format('Y-m-d')],true);
                    if($reservation){
                        $reservations[$date->format('F')]=$reservation;
                    }
                    $date=$date->endOfMonth()->addDays(1);
                    break;
                case 'yearly':
                    $reservation=Reservation::getCounts([$date->format('Y-m-d'),$date->endOfYear()->format('Y-m-d')],true);
                    if($reservation){
                        $reservations[$date->format('Y')]=$reservation;
                    }
                    $date=$date->endOfYear()->addDays(1);
                    break;
            }
           
        }
        
        $data = [
            'reservations' => $reservations,
            'date' => date('m/d/Y'),
            'type'=> $type
        ];
           
        $pdf = PDF::loadView('reports.reservation', $data);
     
        return $pdf->stream();
    }
    
    public function donationReport($type,$start,$end)
    {
        $start=Carbon::parse($start);
        $end=Carbon::parse($end);
        $date = $start;
        $donations=[];
        while ($date <= $end) {
            switch($type){
                case 'daily':
                    $donation=Donations::getCounts($date->format('Y-m-d'));
                    if($donation){
                        $donations[$date->format('Y-m-d')]=$donation;
                    }
                    $date->addDays(1);
                    break;
                case 'monthly':
                    $donation=Donations::getCounts([$date->format('Y-m-d'),$date->endOfMonth()->format('Y-m-d')]);
                    if($donation){
                        $donations[$date->format('F')]=$donation;
                    }
                    $date=$date->endOfMonth()->addDays(1);
                    break;
                case 'yearly':
                    $donation=Donations::getCounts([$date->format('Y-m-d'),$date->endOfYear()->format('Y-m-d')]);
                    if($donation){
                        $donations[$date->format('Y')]=$donation;
                    }
                    $date=$date->endOfYear()->addDays(1);
                    break;
            }
               
        }
            // dd($donations);
            $data = [
                'donations' => $donations,
                'date' => date('m/d/Y'),
                'type'=> $type
            ];
        
           
        $pdf = PDF::loadView('reports.donation', $data);
     
        return $pdf->stream();
    }
    
    // public function donation()
    // {
    //     $classBD=Reservation::getCounts([date('Y-m-01'), Carbon::now()->endOfMonth()->format('Y-m-d')]);
    //     return view('admin.dashboard.donation');
    // }
    public function counters($start,$end)
    {
        $dates=[
            Carbon::parse($start),
            Carbon::parse($end)
        ];
        $reservation=Reservation::whereBetween('date_visit',$dates)->where('status','confirmed')->count();
        $donation=Donations::getCounts([$dates[0]->format('Y-m-d'),$dates[1]->endOfMonth()->format('Y-m-d')]);
        return response([
            'reservation'=>$reservation,
            'donation'=>$donation
        ]);
    }
    
    public function donationPrint($type,$start,$end)
    {
        $start=Carbon::parse($start);
        $end=Carbon::parse($end);
        $date = $start;
        $donations=[];
        while ($date <= $end) {
            switch($type){
                case 'daily':
                    $donation=Donations::getCounts($date->format('Y-m-d'));
                    if($donation){
                        $donations[$date->format('Y-m-d')]=$donation;
                    }
                    $date->addDays(1);
                    break;
                case 'monthly':
                    $donation=Donations::getCounts([$date->format('Y-m-d'),$date->endOfMonth()->format('Y-m-d')]);
                    if($donation){
                        $donations[$date->format('F Y')]=$donation;
                    }
                    $date=$date->endOfMonth()->addDays(1);
                    break;
                case 'yearly':
                    $donation=Donations::getCounts([$date->format('Y-m-d'),$date->endOfYear()->format('Y-m-d')]);
                    if($donation){
                        $donations[$date->format('Y')]=$donation;
                    }
                    $date=$date->endOfYear()->addDays(1);
                    break;
            }
            // echo $date->format('Y-m-d');
        }
        // dd('sda');
            $data = [
                'donations' => $donations,
                'date' => date('m/d/Y'),
                'type'=> $type
            ];
     
        return view('reports.donation1', $data);
    }
    
    public function printReservationReport($type, $start, $end)
    {
        // dd(Reservation::all());
        $classes=[ 'regular','student','senior','foreign','resident'];
        // $start = Carbon::now()->startOfMonth();
        // $end = Carbon::now()->endOfMonth();
        $start=Carbon::parse($start);
        $end=Carbon::parse($end);
        $date = $start;
        $reservations=[];
        while ($date <= $end) {
            switch($type){
                case 'daily':
                    $reservation=Reservation::getCounts($date->format('Y-m-d'),true);
                    if($reservation){
                        $reservations[$date->format('Y-m-d')]=$reservation;
                    }
                    $date->addDays(1);
                    break;
                case 'monthly':
                    $reservation=Reservation::getCounts([$date->format('Y-m-d'),$date->endOfMonth()->format('Y-m-d')],true);
                    if($reservation){
                        $reservations[$date->format('F')]=$reservation;
                    }
                    $date=$date->endOfMonth()->addDays(1);
                    break;
                case 'yearly':
                    $reservation=Reservation::getCounts([$date->format('Y-m-d'),$date->endOfYear()->format('Y-m-d')],true);
                    if($reservation){
                        $reservations[$date->format('Y')]=$reservation;
                    }
                    $date=$date->endOfYear()->addDays(1);
                    break;
            }
           
        }

        //get the sum of total income in reservation -binary01
        
        $totalReservation = DB::table('payments')->sum('total')->groupBy(date('create_at','m'));
                
        $data = [
            'reservations' => $reservations,
            'date' => date('m/d/Y'),
            'type'=> $type,
            'totalRes' => $totalReservation
        ];
           
       return view('reports.reservation1', $data);
    }
    

}
