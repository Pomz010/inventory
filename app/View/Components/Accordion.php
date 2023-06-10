<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Accordion extends Component
{
    public $accordionTitle;
    public array $items;
    public $icon;
    /**
     * Create a new component instance.
     */
    public function __construct($accordionTitle, $items, $icon)
    {
        $this->accordionTitle = $accordionTitle;
        $this->items = $items;
        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string|array
    {
        return view('components.accordion');
    }
}
