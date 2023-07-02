<?php

namespace App\View\Components\Forms\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class VendorDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $vendors;

    public function __construct($vendors)
    {
        $this->vendors = $vendors;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.partials.vendor-dropdown');
    }
}
