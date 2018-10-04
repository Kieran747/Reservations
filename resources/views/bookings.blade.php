@extends('layouts.app')

@section('content')

    <div class="booking-individual">
        <p style="font-size: 30px">Customer Name:</p> <p style="font-size: 20px">{{ $booking->name }}</p>
        <p style="font-size: 30px">Type:</p> <p style="font-size: 20px">{{ $booking->type }}</p>
        <p style="font-size: 30px">Check-in Date</p> <p style="font-size: 20px">{{ $booking->check_in }}</p>
        <p style="font-size: 30px">Check-out Date</p> <p style="font-size: 20px">{{ $booking->check_out }}</p>
        <button class="btn btn-primary" style="background-color: red; border-color: red;">Delete</button>
        <td><a href="/bookings/edit/{{ $booking->id }}"><button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;">Edit</button></a></td>
    </div>

@endsection

@extends('layouts.footer')

