<?php

use App\Http\Controllers\Http\api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group( function() {
    Route::post('login','login');
    Route::post('register','register');
});