<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('users', 'App\Http\Controllers\API\UserController@index');
Route::post('users', 'App\Http\Controllers\API\UserController@store');
Route::get('users/{user}', 'App\Http\Controllers\API\UserController@show');
Route::put('users/{user}', 'App\Http\Controllers\API\UserController@update');
Route::delete('users/{user}', 'App\Http\Controllers\API\UserController@destroy');
