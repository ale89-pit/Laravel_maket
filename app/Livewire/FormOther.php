<?php

namespace App\Livewire;

use Livewire\Component;

class FormOther extends Component
{

    public $other;
    public $model ='';
    public $serial_number='';
    public $category ='';
    public $brand='';


    public function mount($other = null){
        $this->other = $other;

        if($other){ 

            $this->model = $other->model;
            $this->serial_number = $other->serial_number;
            $this->category = $other->category;
            $this->brand = $other->brand;
    }
}
    public function render()
    {
        return view('livewire.form-other');
    }
}
