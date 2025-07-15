<?php

namespace App\View\Directives;

use Illuminate\Support\Facades\Blade;

class FancifyDirective
{
    public static function register()
    {

        // Single-line and block directive
        Blade::directive('fancify', function ($expression = null) {
            if ($expression) {
                return "<?php echo str_ireplace('Laravel', '<x-gradient-text>43rddd</x-gradient-text>', $expression); ?>";
            }
        });
    }
}
