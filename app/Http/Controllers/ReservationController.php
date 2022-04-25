<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Session;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;

class ReservationController extends Controller
{
    public function addReservation()
    {
        $sessions=Session::all();
        $events=Event::all();
        return view('user.reservation',compact('sessions','events'));
    }
    public function index()
    {
        $reservations=Reservation::all();
        return view('admin.reservations',compact('reservations'));
    }
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'date_visit'=>['required','date'],
            'session_id'=>['required','numeric'],
            'no_of_pax'=>['required','numeric'],
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','string','email'],
            'phone'=>['required','numeric'],
            'address'=>['required','string'],
            'event_id'=>['required','numeric'],
        ]);
        $data['user_id']=auth()->user()->id;
        $reservation = new Reservation($data);
        $reservation->save();
        return response([
            'data'=>$reservation,
            'message'=>'Reservation Successfully Added'
        ],200);
    }
    public function confirm(Reservation $reservation)
    {
        $reservation->update(['status'=>'confirmed']);
        
        $d=Mail::to($reservation->email)->send(new ReservationMail($reservation));
        return response([
            'data'=>$reservation,
            'message'=>'Reservation Successfully Confirmed'
        ],200);
    }
    public function cancel(Reservation $reservation)
    {
        $reservation->update(['status'=>'cancelled']);
        return response([
            'data'=>$reservation,
            'message'=>'Reservation Successfully Cancelled'
        ],200);
    }
}
