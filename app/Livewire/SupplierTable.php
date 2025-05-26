<?php

namespace App\Livewire;

use App\Models\Supplier;
use Livewire\Component;

class SupplierTable extends Component
{
    public $search = '';

    public function render()
    {
        $suppliers = Supplier::where('name','like','%'. $this->search . '%')->get();
        return view('livewire.supplier-table', compact('suppliers'));
    }
}
