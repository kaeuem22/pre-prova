<?php

use App\Http\Controllers\apiProductController;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', apiProductController::class);