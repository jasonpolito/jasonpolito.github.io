<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Painterly extends Component
{
    public string $id;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->id = uniqid();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.painterly');
    }
}
