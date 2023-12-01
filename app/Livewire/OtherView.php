<?php

namespace App\Livewire;

use Livewire\Component;

class OtherView extends Component
{

    public $other;

    public function mount($other){
        $this->other = $other;
    }

    public function render()
    {
        return view('livewire.other-view');
    }
}
