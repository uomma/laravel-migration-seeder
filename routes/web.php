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
    return view('home');
});

Route::get('/characters', function () {

    $films =[
        'movies' => config('db')
    ];

    return view('characters', $films);
});

Route::get('/comics', function () {
    return view('home');
});

Route::get('/movies', function () {
    return view('home');
});

Route::get('/tv', function () {
    return view('home');
});

Route::get('/games', function () {
    return view('home');
});

Route::get('/collectibles', function () {
    return view('home');
});

Route::get('/videos', function () {
    return view('home');
});

Route::get('/fans', function () {
    return view('home');
}); 

Route::get('/news', function () {
    return view('home');
});

Route::get('/shop', function () {
    return view('home');
});
