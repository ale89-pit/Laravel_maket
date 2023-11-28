<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;


class CustomerController extends Controller
{

    public  function index(){
        $customer = Customer::all();
        dd($customer);
        return view('livewire.customer', ['customers' => $customers]);
    }

    public  function findByUser(){
        $user_id = auth()->id();
        $customers = Customer::where('user_id', $user_id)->get();
    //    dump($customers);
        return view('livewire.customer',['customers' => $customers]);
    }
}
