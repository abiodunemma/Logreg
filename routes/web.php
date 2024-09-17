<?php

use Illuminate\Support\Facades\Route;
use App\Models\Bank;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->middleware(('auth'));

Route::get('/top', [App\Http\Controllers\HomeController::class, 'Top'])->middleware(('auth'));

Route::get('/kyc1', [App\Http\Controllers\HomeController::class, 'follow'])->middleware(('auth'));

Route::post('/kyc1', [App\Http\Controllers\HomeController::class, 'add'])->middleware(('auth'));

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
