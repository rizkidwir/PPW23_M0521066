<?php

use Illuminate\Support\Facades\Route;
USE App\Http\Controllers\RoomsController;
USE App\Http\Controllers\MessagesController;

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
    return view('user.welcome');
});

Route::get('/welcome', function () {
    return view('user.welcome');
});

Route::get('/room', [RoomsController::class,'show']);

Route::get('/contact', function () {
    return view('user.contact');
});

Route::post('/create', [MessagesController::class,'add']);

