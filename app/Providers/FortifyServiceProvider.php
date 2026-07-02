<?php

// Questo è IL FILE CHE COMANDA TUTTO per login, register, logout, reset, ecc..
// FORTIFY REGISTRA IN AUTOMATICO LE ROTTE: GET /login  ,POST /login ,POST /logout

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;

//FORTIFY HA UN CreateNewUser CON CUI INTERRAGIRE
class FortifyServiceProvider extends ServiceProvider
{
    public function register(): void
    {
    }

    public function boot(): void

     //Quando un utente si registra, Fortify usa questa Action
        //    invece di un controller personalizzato.
    {
        Fortify::createUsersUsing(CreateNewUser::class);


        // Fortify userà il percorso gli indicizzi tu scrivendolo
        Fortify::loginView(function () {
            return view('auth.login');
        });
// Rotta per la Registrazione
        Fortify::registerView(function () {
            return view('auth.register');
        });


        // Protezione dal anti brute-force sul login
        RateLimiter::for('login', function (Request $request) {
            return Limit::perMinute(5)->by($request->email . $request->ip());
        });
    }
}
