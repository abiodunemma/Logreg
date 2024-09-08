<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



Route::namespace('App\Http\Controllers')->group(function(){
    // GET API-Fetch one or more record
   Route::get('users/{id?}', 'UserController@getUsers');
    // post API-Add simple user
    Route::post('add-users', 'UserController@addUser');
    // Post Api - Add single user
    Route::post('add-mutiple-users', 'UserController@addMutipleUsers');
  //  Route::get('addup', 'UserController@get');
   // Route::post('add','UserController@addUser');

});

//Route::get('users/{id?}', 'App\Http\Controllers\UserController@getUsers');
//Route::post('add-users','App\Http\Controllers\UserController@addUsers');

//Route::get('users', 'App\Http\Controllers\UserController@getUsers');
//Route::get('schools',[SchoolController::class, 'list']);
