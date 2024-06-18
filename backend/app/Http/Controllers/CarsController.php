<?php

namespace App\Http\Controllers;

use App\Models\Cars as Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;

class CarsController extends Controller
{
    public function index()
    {
        $cars = Car::with('driver.user')->get();
        return response()->json($cars);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json($car);
    }

    public function store(CarRequest $request)
    {
        $car = Car::create($request->validated());
        return response()->json($car, 201);
    }

    public function update(CarRequest $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->validated());
        return response()->json($car, 200);
    }

    public function destroy($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(null, 204);
    }
}
