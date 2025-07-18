<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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

        Blade::directive('highlightWords', function ($words) {
            return "<?php 
                \$words = $words;
                ob_start(); 
            ?>";
        });

        Blade::directive('endHighlightWords', function () {
            return "<?php
                \$content = ob_get_clean();
                \$accent = config('colors.accent');
                foreach (\$words as \$word) {
                    \$content = preg_replace_callback(
                        '/\\b(' . \$word . ')\\b/i',
                        fn(\$matches) => '<span class=\"text-' . \$accent . '\">' . \$matches[1] . '</span>',
                        \$content
                    );
                }
                echo \$content;
            ?>";
        });
    }
}
