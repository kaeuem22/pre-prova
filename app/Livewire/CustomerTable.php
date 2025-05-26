<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CustomerTable extends Component
{

    public $search = '';

    public function render()
    {
        $customers = Customer::where('name', 'like', '%' . $this->search . '%')->get();
        return view('livewire.customer-table', compact('customers'));
    }
}
