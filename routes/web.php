<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ClientController::class, 'index'])->name('home');
Route::resource('contact', ContactController::class);
Route::resource('client', ClientController::class);
Route::resource('profile', ProfileController::class);
