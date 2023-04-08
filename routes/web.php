<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();
Route::resource('projects', App\Http\Controllers\ProjectController::class);