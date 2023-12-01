<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Other;

class OtherController extends Controller
{
    //
    public function store(Request $request){

        $request->validate([
            'brand' => 'required',
            'model' => 'required',
            'category' => 'required',
            'serial_number' => 'required',   
        ]);

        Other::create([
            'brand' => $request->brand,
            'model' => $request->model,
            'category' => $request->category,
            'serial_number' => $request->serial_number
        ]);
        
        return view('livewire.form-other', ['other' => $other])->with("success", " Created successfully");
    }
}
