<?php

use Illuminate\Support\Facades\Route;

Route::get('/home',[App\Http\Controllers\GitController::class, 'index']);

Route::get('/login',[App\Http\Controllers\GitController::class, 'login']);

Route::get('/card',[App\Http\Controllers\GitController::class, 'card']);

Route::get('/hotro',[App\Http\Controllers\GitController::class, 'hotro']);

Route::get('/news',[App\Http\Controllers\GitController::class, 'news']);