@extends('layouts.navbar')

@section('content')




     @foreach($employees as $employee)
        {{ $employee->email }} <br>
        @endforeach


@endsection

@extends('layouts.footer')

