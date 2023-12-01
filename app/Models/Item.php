<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $table = 'items';

    protected $fillable = [ 'name', 'description', 'price', 'customer_id'];


    public static function index($item_id){
        return Item::where('id', $item_id)->with('itemable')->first();;
    }

    public function customer()
    {
        return Item::belongsTo(Customer::class);
    }

    public function itemable()
    {
        return Item::morphTo();
    }

    public function getAll(){

        return Item::all();
    }

    public static function getByCustomer($customer_id){

        return Item::where('customer_id', $customer_id)
                    ->with('itemable')
                    ->get();
    }
}
