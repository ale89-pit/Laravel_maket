<?php

namespace App\Livewire;

use Livewire\Component;

class BookView extends Component
{
    public $book ;

    public function mount($book)
    {
        $this->book = $book;
    }

    public function render()
    {
        return view('livewire.book-view');
    }
}
