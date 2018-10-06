<?php

namespace App\Http\Controllers;
use App\Booking;

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
        $booking->number_of_people = request('number_of_people');

        $booking->save();

        return redirect('/home');
    }
    public function getDeleteBooking($id)
    {

        $booking = Booking::where('id', $id)->first();
        $booking->delete();
        return redirect('/bookings/list')->with(['message' => 'deleted!']);
    }

    public function update($id)
    {
        $booking = Booking::where('id', $id)->first();
        $booking->name = request('name');
        $booking->type = request('type');
        $booking->check_in = request('check_in');
        $booking->check_out = request('check_out');
        $booking->number_of_people = request('number_of_people');

        $booking->update();

        return redirect('/home');
    }

}
