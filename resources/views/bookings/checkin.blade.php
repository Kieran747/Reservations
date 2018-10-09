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

    <center>

    <div class="booking-checkin">
        <p style="font-size: 30px">Check-in: {{ $booking->name }}</p>
        <form style="font-size: 20px" method="POST" action="/amenities">
            {{ csrf_field() }}
            <p>Number of people:</p>
            <select name="people" style="width: 50px; height: 40px;">
                <option value="{{ $booking->number_of_people }}">{{ $booking->number_of_people }}</option>

                <?php if($booking->number_of_people == '1') { echo ''; } else { echo '<option value="1">1</option>';}?>
                <?php if($booking->number_of_people == '2') { echo ''; } else { echo '<option value="2">2</option>';}?>
                <?php if($booking->number_of_people == '3') { echo ''; } else { echo '<option value="3">3</option>';}?>
                <?php if($booking->number_of_people == '4') { echo ''; } else { echo ' <option value="1">4</option>';}?>
                <?php if($booking->number_of_people == '5') { echo ''; } else { echo '<option value="1">5</option>';}?>
                <?php if($booking->number_of_people == '6') { echo ''; } else { echo '<option value="1">6</option>';}?>
            </select>
            <p>Dog:</p>
            <select name="dog"> <option value="0">No</option> <option value="1">Yes</option> </select> <br>
            <p>Electricity:</p>
            <select name="electricity"> <option value="0">No</option> <option value="1">Yes</option> </select> <br>
            <p>Shower Coins:</p>
            <input type="text" value="0" name="shower"> <br>
            <p>Washing Machine:</p>
            <select name="washingMachine"> <option value="0">no</option> <option value="1">yes</option> </select> <br>
            <p>Dryer:</p>
            <select name="dryer"> <option value="0">No</option> <option value="1">yes</option> </select> <br>
            <input name="days" type="hidden" value="{{ $diff->format("%a")  }}">
            <input name="link" type="hidden" value="{{ $booking->id }}"> <br>
            <button name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </center>



@endsection

@extends('layouts.footer')

