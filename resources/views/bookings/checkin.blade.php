@extends('layouts.app')

@section('content')



    <?php
   $dateB1 = $booking->check_in;
  $dateB2 = $booking->check_out;

    $date1 = date_create($dateB1);
    $date2 = date_create($dateB2);

    $diff=date_diff($date1,$date2);
    //echo $diff->format("%a");
    ?>


    <div class="booking-checkin">
        <p style="font-size: 30px">Check-in: {{ $booking->name }}</p>
        <form style="font-size: 20px" method="POST" action="/amenities">
            {{ csrf_field() }}
            Number of people: <input type="text" name="people" value="{{ $booking->number_of_people }}"> <br>
            Dog: <select name="dog"> <option value="0">No</option> <option value="1">Yes</option> </select> <br>
            Electricity: <select name="electricity"> <option value="0">No</option> <option value="1">Yes</option> </select> <br>
            Shower Coins: <input type="text" value="0" name="shower"> <br>
            Washing Machine: <select name="washingMachine"> <option value="0">no</option> <option value="1">yes</option> </select> <br>
            Dryer: <select name="dryer"> <option value="0">No</option> <option value="1">yes</option> </select> <br>
            <input name="days" type="hidden" value="{{ $diff->format("%a")  }}">
            <input name="link" type="hidden" value="{{ $booking->id }}"> <br>
            <button name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




@endsection

@extends('layouts.footer')

