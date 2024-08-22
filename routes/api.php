<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('users/{id?}', 'App\Http\Controllers\UserController@getUsers');
//Route::get('users/{$id?}', 'App\Http\Controllers\UserController@getUsers');
//Route::get('schools',[SchoolController::class, 'list']);