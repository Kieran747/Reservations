@extends('layouts.header')

@section('content')

    <center>
        <div class="booking">


            <form action="/booking" method="POST">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Customer name" style="width: 400px; height: 40px; text-align: center;"> <br>
                <p>Contact details:</p>
                <input type="text" name="email" placeholder="Customer email" style="width: 400px; height: 40px; text-align: center;"> <br> <br>
                <input type="text" name="phone_number" placeholder="Customer phone number" style="width: 400px; height: 40px; text-align: center;"> <br>

                <label for="type">Select a reservation type:</label> <br>
                <select name="type" style="width: 400px; height: 40px;">
                    <option value="Small Tent">Small Tent</option>
                    <option value="Big Tent">Big Tent</option>
                    <option value="Caravan">Caravan</option>
                </select> <br>

                <lable for="number_of_people">Number of people</lable> <br>
                <select name="number_of_people">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select>

                <p>Check in date:</p>
                <input type="date" class="datepicker" name="check_in" style="width: 400px; height: 40px; border: 1px;"> <br>
                <p>Check out date:</p>
                <input type="date" class="datepicker" name="check_out" style="width: 400px; height: 40px; border: 1px;"> <br>
                <input type="hidden" name="checked_in" value="0">
                <input type="hidden" name="checked_out" value="0">
                <button type="submit" name="submit" style="height: 40px; width: 100px; " class="btn btn-primary" value="submit">Submit</button>
            </form>


        </div>
    </center>


@endsection

@extends('layouts.footer')

