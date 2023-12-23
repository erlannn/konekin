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
    return view('pages/landpage');
});

Route::get('/about', function () {
    return view('pages/aboutkonekin');
});

Route::get('/private', function () {
    return view('pages/privatecommunity');
});

Route::get('/contact', function () {

    return view('pages/contact');
});

Route::get('/login', function () {

    return view('log/login');
});

Route::get('/signup', function () {

    return view('log/signup');
});

Route::get('/konekin', function () {

    return view('pages/landpage');
});

Route::get('/community', function () {

    return view('pages/community');
});

Route::get('/createcommunity', function () {

    return view('pages/createcommunity');
});

Route::get('/mycommunity', function () {

    return view('pages/mycommunity');
});

Route::get('/homekonekin', function () {

    return view('pages/homekonekin');
});
