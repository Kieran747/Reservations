@extends('layouts.app')

@section('content')

<style>
    input {
        width: 300px;
    }
</style>

    <div class="booking-individual">
        <form action="/update/{{ $booking->id }}" method="POST">
            {{ csrf_field() }}
            <p style="font-size: 30px">Customer Name:</p> <input type="text" name="name" value="{{ $booking->name }}"> <br>
            <p style="font-size: 30px">Email</p> <input type="text" name="email" value="{{ $booking->email }}"> <br>
            <p style="font-size: 30px">Customer Phone number:</p> <input type="text" name="phone_number" value="{{ $booking->phone_number }}"> <br>

            <p style="font-size: 30px">Reservation Type</p>
            <select name="type" style="width: 200px; height: 40px;">
                <option value="{{ $booking->type }}">{{ $booking->type }}</option>
                <?php if($booking->type == 'Small Tent') { } else { echo '<option value="Small Tent">Small Tent</option>';} ?>
                <?php if($booking->type == 'Big Tent') { } else { echo '<option value="Big Tent">Big Tent</option>'; } ?>
                <?php if($booking->type == 'Caravan') { } else { echo '<option value="Caravan">Caravan</option>';} ?>
            </select> <br>

            <p style="font-size: 30px">Number of people</p>
            <select name="number_of_people" style="width: 50px; height: 40px;">
                <option value="{{ $booking->number_of_people }}">{{ $booking->number_of_people }}</option>

            <?php if($booking->number_of_people == '1') { echo ''; } else { echo '<option value="1">1</option>';}?>
                <?php if($booking->number_of_people == '2') { echo ''; } else { echo '<option value="2">2</option>';}?>
                <?php if($booking->number_of_people == '3') { echo ''; } else { echo '<option value="3">3</option>';}?>
               <?php if($booking->number_of_people == '4') { echo ''; } else { echo ' <option value="1">4</option>';}?>
                <?php if($booking->number_of_people == '5') { echo ''; } else { echo '<option value="1">5</option>';}?>
                <?php if($booking->number_of_people == '6') { echo ''; } else { echo '<option value="1">6</option>';}?>
            </select>

            <p style="font-size: 30px">Check-in Date</p> <input type="date" name="check_in" value="{{ $booking->check_in }}">
            <p style="font-size: 30px">Check-out Date</p> <input type="date" name="check_out" value="{{ $booking->check_out }}"> <br>
            <input type="hidden" value="{{ $booking->checked_out }}" name="checked_out">
            <input type="hidden" value="{{ $booking->checked_in }}" name="checked_in">
            <input type="hidden" value="{{ $booking->bill }}" name="bill">
            <button class="btn btn-primary" style="background-color: forestgreen; border-color: forestgreen;" name="submit" value="submit">Submit</button> <br>
        </form>
    </div>

@endsection

@extends('layouts.footer')

