<?php

namespace App\Http\Controllers;

use App\Http\Requests\PutContractRequest;
use App\Http\Requests\StoreContractRequest;
use App\Models\Car;
use App\Models\Contract;
use App\Models\Customer;

class ContractContoller extends Controller
{
    public function index()
    {
        $contracts = Contract::paginate(10);
        return view('contract.index',compact('contracts'));
    }

    public function create()
    {
        $customers = Customer::where('estado','0')->where('carro','0')->get();
        $cars = Car::where('estado','0')->get();
        $contract = new Contract();
        
        return view('contract.create',compact('customers','cars','contract'));
    }

    public function store(StoreContractRequest $request)
    {
        Contract::create($request->validated());
        Customer::where("id",$request->get('cliente'))->update(['carro'=>'1']);
        Car::where("id",$request->get('carro'))->update(['estado'=>'1']);
        return to_route("contract.index")->with('status',"Contrato Registrado");
    }

    public function show(Contract $contract)
    {
        //
    }

    public function edit(Contract $contract)
    {
        $customers = Customer::where('estado','0');
        $cars = Car::where('estado','0');
        
        return view('contract.edit',compact('customers','cars','contract'));
    }

    public function update(PutContractRequest $request, Contract $contract)
    {
        $contract->update($request->validated());
        return to_route("contract.index")->with('status',"Contrato Actualizado");
    }

    public function destroy(Contract $contract)
    {
        Contract::where('id',$contract->id)
        ->update(['estado'=>'1']);
        return to_route("contract.index")->with('status',"Contrato Dado de Baja");
    }
}
