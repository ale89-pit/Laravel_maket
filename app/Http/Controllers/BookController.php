<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    //
    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'year' => 'required',
            'genre' => 'required',
            'pages' => 'required',
            'isbn' => 'required',

        ]);

        Book::create($request->all());
        return view('livewire.form-item', ['book' => $book])->with("success", "Book created successfully");
        
    }
}
