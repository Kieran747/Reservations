<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('home');

});

Route::get('bookings/create', function () {

    return view('bookings.create');

});

Route::get('bookings/list', function () {

    return view('bookings.list');

});

Route::get('/bookings', function () {


    return view('bookings');

});

Route::get('/employees', function () {

    $employees = DB::table('users')->get();

    return view('employees', compact('employees'));
});

Route::get('/add', function () {
    return view('add');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::post('/booking', 'BookingController@store');

Route::get('/bookings/list', function () {

    $bookings = DB::table('bookings')->get();

    return view('bookings.list', compact('bookings'));
});

Route::get('/bookings/{id}', function ($id) {

    $booking = DB::table('bookings')->find($id);

    return view('bookings', compact('booking'));
});

Route::get('/bookings/edit/{id}', function ($id) {

    $booking = DB::table('bookings')->find($id);

    return view('bookings.edit', compact('booking'));
});


Route::get('bookings/delete', 'BookingController@delete');

Route::post('/booking/edit{id}', 'bookingController@update');