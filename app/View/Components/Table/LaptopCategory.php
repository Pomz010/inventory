<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LaptopCategory extends Component
{
    /**
     * Create a new component instance.
     */
    public $laptops;
    public function __construct($laptops)
    {
        $this->laptops = $laptops;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.laptop-category');
    }
}
