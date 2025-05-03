<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;

Route::get('/user', function (Request $request) {
    if ($request->user()) {
        return $request->user();
    } else {
        return response()->json(['error' => 'Unauthenticated'], 401);
    }
});

Route::post('login',[AuthController::class, 'login'] )->middleware('guest');
Route::post('logout',[AuthController::class, 'logout'])->middleware('auth:sanctum');

