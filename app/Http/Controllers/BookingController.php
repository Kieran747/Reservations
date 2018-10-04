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

    public function update(Booking $id)
    {
        $Booking = new \App\Booking;

        $this->validate($Booking, [
            'name'    =>  'required',
            'type'     =>  'required',
            'date'     =>  'required'
        ]);
        $Booking = Booking::find($id);
        $Booking->name = $Booking->get('name');
        $Booking->type = $Booking->get('type');
        $Booking->date = $Booking->get('date');
        $Booking->save();
        return redirect()->route('/home')->with('success', 'Data Updated');
    }

    public function delete(id $id)
    {
        DB::table('bookings')->delete();

        DB::table('bookings')->where('id', $id);
    }



}
