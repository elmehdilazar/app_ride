<?php

namespace App\Http\Controllers;

use App\Http\Requests\GarageRequest;
use App\Models\garages as Garage;
use Illuminate\Http\Request;

class GaragesController extends Controller
{
    public function index()
    {
        $garages = Garage::all();
        return response()->json($garages);
    }

    public function show($id)
    {
        $garage = Garage::findOrFail($id);
        return response()->json($garage);
    }

    public function store(GarageRequest $request)
    {
        $garage = Garage::create($request->validated());
        return response()->json($garage, 201);
    }

    public function update(GarageRequest $request, $id)
    {
        $garage = Garage::findOrFail($id);
        $garage->update($request->validated());
        return response()->json($garage, 200);
    }

    public function destroy($id)
    {
        $garage = Garage::findOrFail($id);
        $garage->delete();
        return response()->json(null, 204);
    }
}
