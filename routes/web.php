<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\loginController;

Route::get('/', [HomeController::class,"index"]
);

Route::get("/signup",[SignupController::class,"create"]);

Route::get("/login",[loginController::class,"createLoginPage"]);