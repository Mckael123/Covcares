<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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



Route::get('/',[PagesController::class,'home']);
Route::get('/indexlogin',[PagesController::class,'indexlogin']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/about2',[PagesController::class,'about2']);
Route::get('/admin',[PagesController::class,'admin']);
Route::get('/login',[PagesController::class,'login']);
Route::get('/registrasi',[PagesController::class,'registrasi']);
Route::get('/editnews',[PagesController::class,'editnews']);
Route::get('/verifylist',[PagesController::class,'verifylist']);
Route::get('/verifyadmin',[PagesController::class,'verifyadmin']);
Route::get('/editproduct',[PagesController::class,'editproduct']);
