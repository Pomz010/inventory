<?php

namespace App\View\Components\Forms\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SectionDropdown extends Component
{
    /**
     * Create a new component instance.
     */
    public $sections;
    public function __construct($sections)
    {
        $this->sections = $sections;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.partials.section-dropdown');
    }
}
