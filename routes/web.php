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

Route::get('/booking', function () {

    $bookings = DB::table('bookings')->get();

    return view('booking', compact('bookings'));

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

