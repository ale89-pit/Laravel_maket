<?php

namespace App\Livewire;

use Livewire\Component;
use App\Http\Controllers\ItemController;

class FormItem extends Component
{
    public $item;
    
    public $name = '';
    public $price = '';
    public $description = '';

    public function mount($item = null)
    {
        $this->item = $item;

        if ($item) {
            $this->name = $item->name;
            $this->price = $item->price;
            $this->description = $item->description;
        }
    }

    public function save(){

        dump("ciao");
        return ("livewire.update.customer");
    }
  

    public function update(){
        dump("ciao");
    }
    
    public function render()
    {
        return view('livewire.form-item');
    }
}
