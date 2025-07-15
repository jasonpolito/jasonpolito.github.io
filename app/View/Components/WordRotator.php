<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WordRotator extends Component
{
    public array $words;
    public string $longest;
    public string $id;

    /**
     * Create a new component instance.
     */
    public function __construct(array $words = ['Build', 'Together'])
    {
        $this->words = $words;
        $this->id = uniqid('word-rotator-');
        $this->longest = array_reduce($this->words, function ($carry, $item) {
            return strlen($item) > strlen($carry) ? $item : $carry;
        }, '');
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.word-rotator');
    }
}
