@extends('layouts.app')

@section('content')

    <div class="booking-individual">
        <form action="/update" method="POST">
            {{ csrf_field() }}
        <p style="font-size: 30px">Customer Name:</p> <input type="text" name="name" value="{{ $booking->name }}"> <br>

        <label for="type">Select a reservation type:</label> <br>
        <select name="type" style="width: 400px; height: 40px;">
            <option value="{{ $booking->type }}">{{ $booking->type }}</option>
            <option value="Small Tent">Small Tent</option>
            <option value="Big Tent">Big Tent</option>
            <option value="Caravan">Caravan</option>
        </select>
        <p style="font-size: 30px">Check-in Date</p> <input type="date" name="check_in" value="{{ $booking->check_in }}">
        <p style="font-size: 30px">Check-out Date</p> <input type="date" name="check_out" value="{{ $booking->check_out }}"> <br>
       <button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;" name="submit" value="submit">Submit</button></a> <br>
        </form>
    </div>

@endsection

@extends('layouts.footer')

