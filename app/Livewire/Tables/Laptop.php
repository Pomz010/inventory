<?php

namespace App\Livewire\Tables;

use Livewire\Component;
use App\Models\HardwareAsset;

class Laptop extends Component
{
    public $laptops;
    public $sortField;
    public $sortDirection = 'asc';

    public function mount(){
        $this->sortField = 'asset_tag';
        $this->sortLaptop();
    }

    public function sortLaptop(){
        $this->laptops  = HardwareAsset::orderBy($this->sortField, $this->sortDirection)->get();
    }

    public function sortBy($field)
    {
        if ($field === $this->sortField) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortField = $field;
            $this->sortDirection = 'asc';
        }

        $this->sortLaptop();
    }

    // public function testClick($action){
    //     $this->test = $action;
    // }

    public function render()
    {
        // dd($this->laptops);
        return view('livewire.tables.laptop');
    }
}
