<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usersController;
use App\Http\Controllers\vehicleController;
use App\Http\Controllers\DealerController;

Route::resource('User', usersController::class);
Route::resource('vehicule', VehicleController::class);
Route::resource('dealer', DealerController::class);


Route::get('/', function () {
    return view('welcome');
});
