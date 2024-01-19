<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Contract;
use App\Models\Customer;
use App\Models\Ingreso;
use Illuminate\Http\Request;

class IngresoContoller extends Controller
{

    public function index()
    {
        $ingresos = Ingreso::paginate(10);
        return view('ingreso.index',compact('ingresos'));
    }

    public function create()
    {
        $customers = Customer::where('carro','1')
        ->where('estado','0')
        ->get();
        $ingreso = new Ingreso();
        return view('ingreso.create',compact('customers','ingreso'));
    }

    public function store(Request $request)
    {
        $car = Contract::where('cliente',$request->get('cliente'));
        $request->merge(['carro' => $car->input('carro')]);

        Ingreso::create($request->all());
        return to_route("ingreso.index")->with('status',"Ingreso Registrado");
    }

    public function show(Ingreso $ingreso)
    {
        //
    }

    public function edit(Ingreso $ingreso)
    {
        //
    }

    public function update(Request $request, Ingreso $ingreso)
    {
        //
    }

    public function destroy(Ingreso $ingreso)
    {
        //
    }
}
