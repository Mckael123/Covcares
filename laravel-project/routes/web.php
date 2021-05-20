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
    return view('index');
});
Route::get('/landproduk', function () {
    return view('landproduk');
});
Route::get('/news', function () {
    return view('news');
});
Route::get('/covinfo', function () {
    return view('covinfo');
});
Route::get('/login', function () {
    return view('login');
});
