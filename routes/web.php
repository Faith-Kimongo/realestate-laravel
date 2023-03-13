<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// user home page

// property_type e.g bungalows, condor e.t.c listing_type sale, rent e.t.c
// show all listings
Route::get('/{property_type}/{listing_type}', function () {
    return view('welcome');
});

// show single listing(home)
Route::get('/listing/{slug}/{id}', function () {
    return view('welcome');
});

// user login
Route::get('/login', function () {
    return view('welcome');
});

// user register
Route::get('/register', function () {
    return view('welcome');
});

// user saved listings
Route::get('/account/saved', function () {
    return view('welcome');
});

// user show status
Route::get('/account/show-status', function () {
    return view('welcome');
});
?>