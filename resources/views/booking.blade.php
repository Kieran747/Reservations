@extends('layouts.app')

@section('content')

    <center>
<div class="booking">


    <form action="/" method="post">
        {{ csrf_field() }}
    <input type="text" name="Name" placeholder="Customer name" style="width: 400px; height: 40px; text-align: center;"> <br>

    <label for="type">Select a reservation type:</label> <br>
    <select name="type" style="width: 400px; height: 40px;">
        <option>Small Tent</option>
        <option>Big Tent</option>
        <option>Caravan</option>
    </select> <br>

    <script>

        $( function() {
            $('.datepicker').datepicker({
                dateFormat: "yy-mm-dd",
                minDate: 0,
                showButtonPanel: true,
                showOtherMonths: true,
                selectOtherMonths: true
            });
        } );

    </script>
    <p>Booked date</p>
    <input type="date" class="datepicker" name="date" style="width: 400px; height: 40px; border: 1px;"> <br>
        <button type="submit" name="submit" style="height: 40px; width: 100px; " class="btn">Submit</button>
    </form>


</div>
    </center>


@endsection

@extends('layouts.footer')

