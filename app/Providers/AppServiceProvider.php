<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Qui si registrano servizi generali dell'applicazione.
        // Non riguarda l'autenticazione Fortify
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Qui si inizializzano configurazioni globali.
        // Anche questo non è collegato direttamente alle rotte di login/register.
    }
}
