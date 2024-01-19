<?php

namespace App\Http\Controllers;

use App\Http\Requests\PutCustomerRequest;
use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::where('estado','0')->paginate(10);
        return view('customer.index',compact('customers'));
    }

    public function create()
    {
        $customer = new Customer();
        return view('customer.create',compact('customer'));
    }

    public function store(StoreCustomerRequest $request)
    {
        Customer::create($request->validated());
        return to_route("customer.index")->with('status',"Cliente Registrado");
    }

    public function show(Customer $customer)
    {
        //
    }

    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }

    public function update(PutCustomerRequest $request, Customer $customer)
    {
        $customer->update($request->validated());
        return to_route("customer.index")->with('status',"Cliente Actualizado");
    }

    public function destroy(Customer $customer)
    {
        Customer::where('id',$customer->id)
        ->update(['estado'=>'1']);
        return to_route("customer.index")->with('status',"Cliente Eliminado");
    }
}
