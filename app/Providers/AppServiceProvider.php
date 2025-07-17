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
        /**
         * bg-amber-100
         * dark:bg-amber-100
         * text-cyan-950
         * dark:text-cyan-950
         * bg-amber-950
         * dark:bg-amber-950
         * text-amber-100
         * dark:text-amber-100
         */
        // View::share('baseColor', 'amber-100');
        // View::share('textColor', 'cyan-950');
    }
}
