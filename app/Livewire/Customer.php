<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\CustomerController;

class Customer extends Component
{
    
    public function render()
    {
        $costumers = new CustomerController();
        $customers = $costumers->findByUser();
        // dump($customers);
        return view('livewire.customer',['customers' => $customers->getData()]);
    }
}
