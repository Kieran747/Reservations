@extends('layouts.app')

@section('content')

<center>
        <div class="booking-list">
            <p style="font-size: 20px">List of Bookings</p>
            <table  style="width:50%">
                @foreach ($bookings as $booking)
                <tr>
                    <th>Name</th>
                    <th>Check in Date</th>
                    <th>Check out date</th>
                    <th>Type</th>
                </tr>

                <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->type }}</td>
                   <td><a href="/bookings/{{ $booking->id }}"> <button style="" class="btn btn-primary">More info</button></a></td>
                    <td><form action="delete" method="POST"><button class="btn btn-primary" style="background-color: red; border-color: red;">Delete</button></form></td>
                    <td><a href="/edit/{{ $booking->id }}"><button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;">Edit</button></a></td>
                </tr>
                @endforeach
            </table>

        </div>
</center>

@endsection

@extends('layouts.footer')

