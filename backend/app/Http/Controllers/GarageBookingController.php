<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGarageBookingRequest;
use App\Http\Requests\UpdateGarageBookingRequest;
use App\Models\GarageBooking;
use Illuminate\Http\Request;

class GarageBookingController extends Controller
{
    public function index()
    {
        $bookings = GarageBooking::all();
        return response()->json($bookings);
    }

    public function store(StoreGarageBookingRequest $request)
    {
        $booking = GarageBooking::create($request->validated());

        return response()->json($booking, 201);
    }

    public function show($id)
    {
        $booking = GarageBooking::findOrFail($id);
        return response()->json($booking);
    }

    public function update(UpdateGarageBookingRequest $request, $id)
    {
        $booking = GarageBooking::findOrFail($id);
        $booking->update($request->validated());

        return response()->json($booking);
    }

    public function destroy($id)
    {
        $booking = GarageBooking::findOrFail($id);
        $booking->delete();

        return response()->json(null, 204);
    }
}
