<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jewelry;

class JewelryController extends Controller
{
    //
    public function store(Request $request){

        $request->validate([
            'material' => 'required',
            'weight' => 'required',
            'color' => 'required',
            'carat' => 'required',
            'type' => 'required',
        ]);

        Jewelry::create($request->all());

        return view('livewire.form-item', ['jewelry' => $jewelry])->with("success", "Jewelry created successfully");
    }
}
