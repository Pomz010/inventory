<?php

namespace App\Livewire\Tables;

use Livewire\Component;
use App\Models\HardwareAsset;

class SystemUnit extends Component
{
    public $systemUnits;
    public $sortField;
    public $sortDirection = 'asc';

    public function mount(){
        $this->sortField = 'asset_tag';
        $this->sort();
    }

    public function sort(){
        $this->systemUnits  = HardwareAsset::orderBy($this->sortField, $this->sortDirection)->get();
    }

    public function sortBy($field)
    {
        if ($field === $this->sortField) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->sort();
    }

    public function render()
    {
        return view('livewire.tables.system-unit');
    }
}
