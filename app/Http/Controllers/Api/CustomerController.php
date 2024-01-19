<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {
        //return response()->json(Customer::paginate(), 200);
    }

    public function store(Request $request)
    {
        
    }

    public function show(Customer $customer)
    {
        //return response()->json($customer);
    }

    public function update(Request $request, Customer $customer)
    {
        //
    }

    public function destroy(Customer $customer)
    {
        //
    }
}
