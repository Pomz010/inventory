<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Software extends Component
{
    /**
     * Create a new component instance.
     */
    public $softwareAssets;
    public function __construct($softwareAssets)
    {
        $this->softwareAssets = $softwareAssets;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.software');
    }
}
