<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


// ROTTA HOME

Route::get('/',[HomeController::class, 'index'])->name('home');


// ROTTA PAGINA PROFILO- PROTETTA DA MIDDLEWARE
Route::get('/profilo', [HomeController::class, 'profilo'])->middleware('auth')->name('profilo');

//  IL FORTIFY LE REGISTRA ( LOGIN, REGISTER)// Rotte per la registrazione
Route::post('/register', [HomeController::class, 'register'])->name('register.post');