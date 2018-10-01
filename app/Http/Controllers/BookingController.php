<?php

namespace App\Http\Controllers;


class BookingController extends Controller
{

    public function index()
    {
        return view('bookings');
    }

    public function store()
    {
        $booking = new \App\Booking;

        $booking->name = request('name');
        $booking->type = request('type');
        $booking->check_in = request('check_in');
        $booking->check_out = request('check_out');

        $booking->save();

        return redirect('/home');
    }
}
