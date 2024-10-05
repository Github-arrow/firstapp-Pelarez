<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelarezController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/personalinfo',[PelarezController::class, "personalinfo"]);
