<?php

namespace App\View\Components\Forms\Partials;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UsersEntryForm extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(string $id)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.forms.partials.users-entry-form');
    }
}
