<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SystemUnitCategory extends Component
{
    /**
     * Create a new component instance.
     */
    // public $hardwareAssets;
    public $systemUnits;
    public function __construct($systemUnits)
    {
        // $this->hardwareAssets = $hardwareAssets;
        $this->systemUnits = $systemUnits;
        // dd($systemUnits);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.system-unit-category');
    }
}
