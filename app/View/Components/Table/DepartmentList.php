<?php

namespace App\View\Components\Table;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class DepartmentList extends Component
{
    /**
     * Create a new component instance.
     */
    public $departments;
    public function __construct($departments)
    {
        $this->departments = $departments;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.table.department-list');
    }
}
