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
                    <th>Number of people</th>
                </tr>

                <tr>
                    <td>{{ $booking->name }}</td>
                    <td>{{ $booking->check_in }}</td>
                    <td>{{ $booking->check_out }}</td>
                    <td>{{ $booking->type }}</td>
                    <td>{{ $booking->number_of_people }}</td>
                   <td><a href="/bookings/{{ $booking->id }}"> <button style="" class="btn btn-primary">More info</button></a></td>
                    <td>
                        <a class="btn btn-primary" style="background-color: red; border-color: red" href="{{ route('booking.delete', ['id' => $booking->id]) }}">Delete</a>
                        </form>
                    </td>
                    <td><a  href="/bookings/edit/{{ $booking->id }}"><button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;">Edit</button></a></td>
                </tr>
                @endforeach
            </table>

        </div>
</center>

@endsection

@extends('layouts.footer')

