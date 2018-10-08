@extends('layouts.header')

@section('content')

    <center>
        <div class="booking-list">
            <p style="font-size: 20px">List of Bookings</p>
            <table  style="width:75%">
                @foreach ($bookings as $booking)
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
                        <td>{{ $booking->name }}</td>
                        <td>{{ $booking->type }}</td>
                        <td>{{ $booking->number_of_people }}</td>
                        <td>{{ $booking->email }}</td>
                        <td>{{ $booking->phone_number }}</td>
                        <td>{{ $booking->check_in }}</td>
                        <td>{{ $booking->check_out }}</td>
                        <td>
                            <a class="btn btn-primary" style="background-color: red; border-color: red" href="{{ route('booking.delete', ['id' => $booking->id]) }}">Delete</a>
                            </form>
                        </td>
                        <td><a  href="/bookings/checkouts/{{ $booking->id }}"><button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;">Early Checkout</button></a></td>
                    </tr>
                @endforeach
            </table>

        </div>
    </center>

@endsection

@extends('layouts.footer')

