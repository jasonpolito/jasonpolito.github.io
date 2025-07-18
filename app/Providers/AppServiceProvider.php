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
        foreach (config('colors') as $key => $color) {
            View::share($key, $color);
        }

        Blade::directive('highlightWords', function ($words) {
            return "<?php 
                \$words = $words;
                ob_start(); 
            ?>";
        });

        Blade::directive('endHighlightWords', function () {
            return "<?php
                \$content = ob_get_clean();
                \$highlight = config('colors.white');
                foreach (\$words as \$word) {
                    \$content = preg_replace_callback(
                        '/\\b(' . \$word . ')\\b/i',
                        fn(\$matches) => '<span class=\"text-' . \$highlight . '\">' . \$matches[1] . '</span>',
                        \$content
                    );
                }
                echo \$content;
            ?>";
        });
    }
}
