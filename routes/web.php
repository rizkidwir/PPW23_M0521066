<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\SuiteController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\RegisterController;


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
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'authenticate']);
Route::get('/register', [RegisterController::class,'index']);
Route::post('/register', [RegisterController::class,'store']);
Route::post('/logout', [LoginController::class,'logout']);


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

//Admin
Route::middleware(['auth'])->group(function () {
    Route::get('/addsuites', function() {
    return view('admin.form');
    })->middleware('userAkses:admin');
    Route::post('/', [SuiteController::class,'add'])->name('addguest')->middleware('userAkses:admin');
    Route::get('/showguest/{id}', [SuiteController::class,'showguest'])->name('showguest')->middleware('userAkses:admin');
    Route::post('/showguest/{id}', [SuiteController::class,'updateguest'])->name('updateguest')->middleware('userAkses:admin');
    Route::get('/deleteguest/{id}', [SuiteController::class,'deleteguest'])->name('deleteguest')->middleware('userAkses:admin');
    Route::get('/helloadmin', [SuiteController::class,'showlist'])->middleware('userAkses:admin');
});



