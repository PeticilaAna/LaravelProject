<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\DealerController;

Route::resource('users', usersController::class);
Route::resource('vehicles', VehicleController::class);
Route::resource('dealers', DealerController::class);

Route::get('/', [DealerController::class, 'index']);
