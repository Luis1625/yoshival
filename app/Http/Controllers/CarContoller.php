<?php

namespace App\Http\Controllers;

use App\Http\Requests\PutCarRequest;
use App\Http\Requests\StoreCarRequest;
use App\Models\Car;

class CarContoller extends Controller
{

    public function index()
    {
        $cars = Car::paginate(10);
        return view('car.index',compact('cars'));
    }

    public function create()
    {
        $car = new Car();
        return view('car.create',compact('car'));
    }

    public function store(StoreCarRequest $request)
    {
        Car::create($request->validated());
        return to_route("car.index")->with('status',"Auto Registrado");
    }

    public function show(Car $car)
    {
        //
    }

    public function edit(Car $car)
    {
        return view('car.edit', compact('car'));
    }

    public function update(PutCarRequest $request, Car $car)
    {
        $car->update($request->validated());
        return to_route("car.index")->with('status',"Auto Actualizado");
    }

    public function destroy(Car $car)
    {
        Car::where('id',$car->id)
        ->update(['estado'=>'2']);
        return to_route("car.index")->with('status',"Auto Eliminado");
    }
}
