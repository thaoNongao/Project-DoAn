<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[App\Http\Controllers\GitController::class, 'index']);

Route::get('/login',[App\Http\Controllers\GitController::class, 'login']);