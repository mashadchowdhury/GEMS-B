<?php

use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
});

Route::get('/booking/booking.blade.php', function () {
    return view('booking/booking');
});

Route::get('/accommodations/accommodations.blade.php', function () {
    return view('accommodations/accommodations');
});

Route::get('/groups/groups.blade.php', function () {
    return view('groups/groups');
});

Route::get('/admin/admin.blade.php', function () {
    return view('admin/admin');
});