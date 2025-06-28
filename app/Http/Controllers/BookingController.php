<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::all();
        return response()->json($bookings);
    }

    public function show($id)
    {
        $booking = Booking::findOrFail($id);
        return response()->json($booking);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'room_id' => 'required|exists:rooms,id',
            'check_in_date' => 'required|date',
            'check_out_date' => 'required|date|after_or_equal:check_in_date',
            'status' => 'nullable|string|max:255',
        ]);

        $booking = Booking::create($validated);
        return response()->json($booking, 201);
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $validated = $request->validate([
            'customer_id' => 'sometimes|required|exists:customers,id',
            'room_id' => 'sometimes|required|exists:rooms,id',
            'check_in_date' => 'sometimes|required|date',
            'check_out_date' => 'sometimes|required|date|after_or_equal:check_in_date',
            'status' => 'nullable|string|max:255',
        ]);

        $booking->update($validated);
        return response()->json($booking);
    }

    public function destroy($id)
    {
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return response()->json(null, 204);
    }
}
