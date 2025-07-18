<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SkillList extends Component
{
    public array $lines;

    /**
     * Create a new component instance.
     */
    public function __construct(array $lines = [])
    {
        $this->lines = groupArrayBySeparator($lines, '---');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.skill-list');
    }
}
