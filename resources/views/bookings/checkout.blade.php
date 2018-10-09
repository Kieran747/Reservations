@extends('layouts.app')

@section('content')
    <style>
        p {
            font-size: 20px;
        }
    </style>
    <center>
<h1>Checkout</h1>
        <p>{{ $booking->name }}</p>
        <h1>Costs</h1>
        <p>{{ $booking->name }} has stayed for {{ $amenities->days_stayed }} days.</p>
        <p>Dog: <?php $dog = $amenities->Dog ?> <?php
            if ($dog == '1') {
                $DogYesOrNo = 'yes';
            } else {
                $DogYesOrNo = 'No';
            }
            ?> {{ $DogYesOrNo }}</p>
        <p>Electricity: <?php $Elec = $amenities->Electricity ?> <?php
            if ($Elec == '1') {
                $ElecYesOrNo = 'yes';
            } else {
                $ElecYesOrNo = 'No';
            }
            ?> {{ $ElecYesOrNo }}</p>

        <p>Shower: <?php $Shower = $amenities->Shower ?> <?php
            if ($Shower == '1') {
                $ShowerYesOrNo = 'yes';
            } else {
                $ShowerYesOrNo = 'No';
            }
            ?> {{ $ShowerYesOrNo }} (Coins: {{ $Shower }}) </p>

        <p>Wahsing Machine: <?php $Washing = $amenities->WashingMachine ?> <?php
            if ($Washing == '1') {
                $WahsingYesOrNo = 'yes';
            } else {
                $WahsingYesOrNo = 'No';
            }
            ?> {{ $WahsingYesOrNo }}</p>
        <p>Dryer: <?php $Dryer = $amenities->Dryer ?> <?php
            if ($Dryer == '1') {
                $DryerYesOrNo = 'yes';
            } else {
                $DryerYesOrNo = 'No';
            }
            ?> {{ $DryerYesOrNo }}</p>

        <?php
            $Dog = '2';
            $Elec = '2';
            $Washing = '6';
            $Dryer = '4';
            $Caravan = '5';
            $SmallTent = '3';
            $BigTent = '5';

            $cost = '0';

            if ($DogYesOrNo == 'yes') {
                $cost = $cost + '2';
            }

            if ($ElecYesOrNo == 'yes') {
                $cost = $cost + '2';
            }
            if($ShowerYesOrNo == 'yes') {
                $showercost = 0.50 * $amenities->Shower;
                $cost = $cost + $showercost;
            }
            if($WahsingYesOrNo == 'yes') {
                $cost = $cost + '6';
            }
            if($DryerYesOrNo == 'yes') {
                $cost = $cost + '4';
            }
            if($booking->type == 'Caravan') {
                $cost = $cost + '10';
            }
            if($booking->type == 'Small Tent') {
                $cost = $cost + '3';
            }
            if($booking->type == 'Big Tent'){
                $cost = $cost + '5';
            }

            $cost = $cost * $amenities->days_stayed;

        ?>

        <p>Total Cost: £{{ $cost }} </p>

        <form method="POST" action="/checkout/{{ $booking->id }}">
            {{ csrf_field() }}
            <input type="hidden" name="bill" value="{{ $cost }}">
            <button class="btn btn-primary" name="submit">Finish</button>
        </form>

    </center>


@endsection

@extends('layouts.footer')

