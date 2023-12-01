<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Item;

class Book extends Item
{
    use HasFactory;
    protected $table = 'books';
    protected $model = Book::class;
    protected $fillable = ['isbn','title','author','genre', 'pages','year'];

    public function item()
    {
        return $this->morphOne(Item::class, 'itemable');
    }



 
}
