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

    public function store(Request $request){
        try {
            $request->validate([
                'name' => 'required',
                'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Customer::class],
                'phone' => 'required',
                'address' => 'required',
                'birth_date' => 'required',   
            ]);
    
            $user_id = auth()->id();
            $customer = Customer::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'birth_date' => $request->birth_date,
                'user_id' => $user_id
            ]);
    
            return redirect()->route('dashboard')->with('success', 'Add customer successfully');
        } catch (ValidationException $e) {
            
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'An error occurred while adding the customer');
        }
    }
    
    public function edit($id){
        $customer = Customer::with('items')->find($id);
        // dd($customer);
        return view('livewire.update-customer', ['customer' => $customer]);
    }
    public function update($id, Request $request){
        $customer = Customer::find($id);
        $customer->update($request->all());
        // dd($customer);
       
        
        return redirect()->route('customer.edit',$customer->id)->with('success', 'profile-updated');
    }

    public  function findByUser(){
        $user_id = auth()->id();
        $customers = Customer::where('user_id', $user_id)->get();
    //    dump($customers);
        return view('livewire.customer',['customers' => $customers]);
    }

    public function destroy($id){
        $customer = Customer::find($id);
        $customer->delete();
        // dd('cancellato');
        return redirect()->route('dashboard')->with("success", "Customer deleted successfully");
    }
}
