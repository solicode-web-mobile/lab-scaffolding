<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('projects', App\Http\Controllers\ProjectController::class);
Route::resource('tasks', App\Http\Controllers\TaskController::class);