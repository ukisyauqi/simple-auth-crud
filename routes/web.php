<?php

use App\Http\Controllers\Halo\HaloController;
use App\Http\Controllers\Todo\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/halo', [HaloController::class, 'index']);

Route::get('/todo', [TodoController::class, 'index']);
Route::post('/todo', [TodoController::class, 'store']);