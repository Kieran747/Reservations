<?php

namespace App\Http\Controllers;
use App\Booking;

use Illuminate\Http\Request;

class AmenitiesController extends Controller
{
    public function index()
    {
        return view('amenities/');
    }

    public function store()
    {
        $amenities = new \App\amenities;

        $amenities->people = request('people');
        $amenities->dog = request('dog');
        $amenities->electricity = request('electricity');
        $amenities->shower = request('shower');
        $amenities->washingMachine = request('washingMachine');
        $amenities->dryer = request('dryer');
        $amenities->days_stayed = request('days');
        $amenities->link = request('link');


        $amenities->save();


        $booking = Booking::where('id', $amenities->link)->first();

        $booking->checked_in = 1;

        $booking->save();

        return redirect('/home');
    }
}
