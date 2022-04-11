<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function addReservation()
    {
        return view('reservation');
    }
    public function index()
    {
        return view('admin.reservations');
    }
}
