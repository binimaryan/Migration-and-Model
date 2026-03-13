<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\GreetController;

Route::resource('tasks', TaskController::class);

Route::get('/greet/{name?}', [GreetController::class, 'greet']);

Route::get('/', function () {
    return view('welcome');
});