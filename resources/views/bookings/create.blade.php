@extends('layouts.app')

@section('content')

    <center>
        <div class="booking">


            <form action="/booking" method="POST">
                {{ csrf_field() }}
                <input type="text" name="name" placeholder="Customer name" style="width: 400px; height: 40px; text-align: center;"> <br>

                <label for="type">Select a reservation type:</label> <br>
                <select name="type" style="width: 400px; height: 40px;">
                    <option value="1">Small Tent</option>
                    <option value="2">Big Tent</option>
                    <option value="3">Caravan</option>
                </select> <br>

                <p>Check in date:</p>
                <input type="date" class="datepicker" name="check_in" style="width: 400px; height: 40px; border: 1px;"> <br>
                <p>Check out date:</p>
                <input type="date" class="datepicker" name="check_out" style="width: 400px; height: 40px; border: 1px;"> <br>
                <button type="submit" name="submit" style="height: 40px; width: 100px; " class="btn btn-primary" value="submit">Submit</button>
            </form>


        </div>
    </center>


@endsection

@extends('layouts.footer')

