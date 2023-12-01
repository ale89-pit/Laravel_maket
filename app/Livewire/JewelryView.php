<?php

namespace App\Livewire;

use Livewire\Component;

class JewelryView extends Component
{
    public $jewelry;

    public function mount($jewelry)
    {
        $this->jewelry = $jewelry;
        
    }
    public function render()
    {
        return view('livewire.jewelry-view');
    }
}
