<?php

namespace App\View\Components\Cards;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Course extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $title,
        public string $rating,
        public string $hours,
        public string $modules,
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.cards.course');
    }
}
