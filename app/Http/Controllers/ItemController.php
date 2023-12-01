<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index(){
        
        return view('livewire.item-view',['items' => Item::all()]);

    }

    public function getByCustomer($customer_id){

        $items = Item::getByCustomer($customer_id);
        // dd($items);
        return view('livewire.item-view', ['items' => $items]);
    }

    public function edit($id){
        $item = Item::index($id);
        // dd($item);
        return view('livewire.update-item', ['item' => $item]);
    }

    public function store(Request $request){
        dump($request);

        $jewelry= Jewelry->save();
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'customer_id' => 'required',
        ]);
        $item = Item::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'customer_id' => $customer_id,
            'itemable_id' => $jewelry->id,
            'itemable_type' => $jewelry['itemable']
        ]);
    }



}
