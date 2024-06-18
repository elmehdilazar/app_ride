<?php

namespace App\Http\Controllers;

use App\Http\Requests\DriverRequest;
use App\Models\Drivers as Driver;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    public function index()
    {
        $drivers = Driver::with('user', 'cars')->get();
        return response()->json($drivers);
    }

    public function show($id)
    {
        $driver = Driver::findOrFail($id);
        return response()->json($driver);
    }

    public function store(DriverRequest $request)
    {
        $driver = Driver::create($request->validated());
        return response()->json($driver, 201);
    }

    public function update(DriverRequest $request, $id)
    {
        $driver = Driver::findOrFail($id);
        $driver->update($request->validated());
        return response()->json($driver, 200);
    }

    public function destroy($id)
    {
        $driver = Driver::findOrFail($id);
        $driver->delete();
        return response()->json(null, 204);
    }
}
