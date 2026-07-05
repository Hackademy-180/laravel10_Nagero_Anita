<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// ROTTA HOME

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/profilo', [HomeController::class, 'profilo'])->middleware('auth')->name('profilo');


