@extends('layouts.app')

@section('content')
    <?php
    $date = date('Y-m-d');
    ?>
    <center>
        <div class="booking-today">
            <p style="font-size: 20px">Check-ins Today </p> <p style="font-size: 20px; color: #3490dc;">{{ $date }}</p>
            <table  style="width:75%">
                @foreach ($bookingsToday as $bookingToday)
                    <tr>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Number of people</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Check in Date</th>
                        <th>Check out date</th>

                    </tr>

                    <tr>
                        <td>{{ $bookingToday->name }}</td>
                        <td>{{ $bookingToday->type }}</td>
                        <td>{{ $bookingToday->number_of_people }}</td>
                        <td>{{ $bookingToday->email }}</td>
                        <td>{{ $bookingToday->phone_number }}</td>
                        <td>{{ $bookingToday->check_in }}</td>
                        <td>{{ $bookingToday->check_out }}</td>
                        <td><a href="/bookings/checkin/{{ $bookingToday->id }}"> <button style="" class="btn btn-primary">Check-in</button></a></td>
                        <td>
                            <a class="btn btn-primary" style="background-color: red; border-color: red" href="{{ route('booking.delete', ['id' => $bookingToday->id]) }}">Delete</a>
                            </form>
                        </td>
                        <td><a  href="/bookings/edit/{{ $bookingToday->id }}"><button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;">Edit</button></a></td>
                    </tr>
                @endforeach
            </table>


        </div>
    </center>

@endsection

@extends('layouts.footer')

