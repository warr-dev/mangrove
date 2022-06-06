<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Session;
use App\Models\Event;
use App\Models\Payments;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReservationMail;
use App\Rules\DuplicateCount;

class ReservationController extends Controller
{
    public function addReservation()
    {
        // dd(Reservation::with(['pax','payment'])->get());
        $sessions=Session::all();
        $events=Event::all();
        $classes=['student','senior','foreign'];
        return view('user.reservation',compact('sessions','events','classes'));
    }
    public function index()
    {
        $reservations=Reservation::all();
        return view('admin.reservations',compact('reservations'));
    }
    public function store(Request $request)
    {
        $data=$this->validate($request,[
            'date_visit'=>['required','date',new DuplicateCount(5,$request->session_id??1)],
            'session_id'=>['required','numeric'],
            // 'no_of_pax'=>['required','numeric'],
            'first_name'=>['required','string'],
            'last_name'=>['required','string'],
            'email'=>['required','string','email'],
            'phone'=>['required','numeric'],
            'address'=>['required','string'],
            'event_id'=>['required','numeric'],
            'gcash_account_name'=>['required','string'],
            'gcash_number'=>['required','numeric'],
            'reference_number'=>['required','numeric'],
            'photo'=>[],
            'birth_date'=>['required','array'],
            'birth_date.*'=>['required'],
            'class'=>['required','array'],
            'class.*'=>['required',],
            'name'=>['required','array'],
            'name.*'=>['required',],
        ]);
        $data['user_id']=auth()->user()->id;
        $reservation = new Reservation($data);
        $reservation->save();
        foreach($request->birth_date as $key=>$birth_date){
            $reservation->pax()->create([
                'birth_date'=>$birth_date,
                'class'=>$request->class[$key],
                'name'=>$request->name[$key],
            ]);
        }
        Payments::create([
            'transaction_id'=>$reservation->id,
            'gcash_account_name'=>$request->gcash_account_name,
            'gcash_number'=>$request->gcash_number,
            'reference_number'=>$request->reference_number,
            'photo'=>$request->file('photo')->store('payments/reservations','public')
        ]);
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
