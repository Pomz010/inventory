<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Hardware extends Component
{
    /**
     * Create a new component instance.
     */
    public $hardwareAssets;
    public $laptops;
    public $systemUnits;
    public function __construct($hardwareAssets, $laptops, $systemUnits)
    {
        // dd($hardwareAssets);
        $this->hardwareAssets = $hardwareAssets;
        $this->laptops = $laptops;
        $this->systemUnits = $systemUnits;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.hardware');
    }
}
