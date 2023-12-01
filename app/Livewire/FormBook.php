<?php

namespace App\Livewire;

use Livewire\Component;

class FormBook extends Component
{

    public $book;
    public $isbn;
    public $title;
    public $year;
    public $genre;
    public $pages;
    public $author;
    
    public function mount($book= null){

        $this->book = $book;
        if($book){

            $this->isbn = $book->isbn;
            $this->title = $book->title;
            $this->year = $book->year;
            $this->genre = $book->genre;
            $this->pages = $book->pages;
            $this->author = $book->author;
        }
    }
    
    public function render()
    {
        return view('livewire.form-book');
    }
}
