<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Jewelry;

class FormJewelry extends Component
{
    public $jewelry;

    public $material="";
    public $weight ="";
    public $color ="";
    public $carat ="";
    public $type= "";

    public function mount($jewelry=null)
    {
        $this->jewelry = $jewelry;
        if($jewelry){
            $this->material = $jewelry->material;
            $this->weight = $jewelry->weight;
            $this->color = $jewelry->color;
            $this->carat = $jewelry->carat;
            $this->type = $jewelry->type;
        }
        
    }

    public function save(){
       
        return rout('jewelry.store');
    }
    public function render()
    {
        return view('livewire.form-jewelry');
    }
}
