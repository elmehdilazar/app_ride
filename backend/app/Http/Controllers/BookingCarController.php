<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookingCarRequest;
use App\Models\BookingCar;
use Illuminate\Http\Request;

class BookingCarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bookingCar=BookingCar::all();
        return response()->json($bookingCar,201);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookingCarRequest $request)
    {
        $validated = $request->validated();

        $bookingCar = BookingCar::create($validated);

        return response()->json($bookingCar, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(BookingCar $bookingCar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BookingCar $bookingCar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bookingCar = BookingCar::findOrfail($id);
        $bookingCar->delete();
        return response()->json(['message' => 'Deleted successfully'], 200);

    }
}
