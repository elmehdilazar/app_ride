<?php

namespace App\Http\Controllers;

use App\Http\Requests\LocationRequest;
use App\Models\Locations as Location;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::all();
        return response()->json($locations);
    }

    public function show($id)
    {
        $location = Location::findOrFail($id);
        return response()->json($location);
    }

    public function store(LocationRequest $request)
    {
        $location = Location::create($request->validated());
        return response()->json($location, 201);
    }

    public function update(LocationRequest $request, $id)
    {
        $location = Location::findOrFail($id);
        $location->update($request->validated());
        return response()->json($location, 200);
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();
        return response()->json(null, 204);
    }
}
