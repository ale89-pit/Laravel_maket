<?php

namespace App\Livewire;

use Livewire\Component;

class FormItem extends Component
{
    public $item;
    
    public $name;
    public $price;
    public $description;

    public function mount($item){
        $this->item = $item;
        $this->name = $item->name;
        $this->price = $item->price;
        $this->description = $item->description;
    }
    
    public function render()
    {
        return view('livewire.form-item');
    }
}
