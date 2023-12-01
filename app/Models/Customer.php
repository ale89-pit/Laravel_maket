<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'birth_date',
        'user_id',

    ];

    protected $casts = [
        'birth_date' => 'datetime:Y/m/d', 
        'options' => 'array',
    ];

    public function items()
    {
        return $this->hasMany(Item::class);
    }

}
