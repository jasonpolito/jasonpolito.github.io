<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DesktopFrame extends Component
{
    public string $src;
    public string|null $url;

    /**
     * Create a new component instance.
     */
    public function __construct($src, $url)
    {
        $this->src = $src;
        $this->url = $url;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.desktop-frame');
    }
}
