<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jewelry extends Model
{
    use HasFactory;
    protected $table = 'jewelry';
    protected $model = Jewelry::class;
    protected $fillable = ['material', 'carat','weight', 'color','type'];

    public function item()
    {
        return $this->morphOne(Item::class, 'itemable');
    }
}
