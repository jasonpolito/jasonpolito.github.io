<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::share('paper', 'amber-500');
        View::share('ink', 'slate-950');
        View::share('accent', 'red-800');
        View::share('accent2', 'cyan-950');
        View::share('dim', 'orange-950');
    }
}
