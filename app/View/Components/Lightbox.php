<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Lightbox extends Component
{
    public string $id;

    /**
     * Create a new component instance.
     */
    public function __construct(string $id = '')
    {
        $this->id = $id ?? uniqid('lightbox-');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.lightbox');
    }
}
