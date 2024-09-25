<?php

use Illuminate\Support\Facades\Route;

use App\Models\Bank;
use App\Models\Link;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->middleware(('auth'));

// link urls
Route::get('/top', [App\Http\Controllers\HomeController::class, 'top'])->middleware(('auth'))->name('/top');
Route::post('/top', [App\Http\Controllers\BankController::class, 'addlink'])->name('bank-id');

// kyc1 urls
Route::get('/kyc1', [App\Http\Controllers\HomeController::class, 'follow'])->middleware(('auth'));
Route::post('/kyc1', [App\Http\Controllers\HomeController::class, 'add'])->middleware(('auth'));

// profile page functionality
Route::get('User/profile', [App\Http\Controllers\UserController::class, 'getprofile'])->middleware(('auth'));
Route::get('/User/profile', [App\Http\Controllers\UserController::class, 'store'])->middleware(('auth'))->name('/User/profile');

//make payments
Route::get('/trans', [App\Http\Controllers\PaymentController::class, 'pay'])->middleware(('auth'));

// auth urls
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
