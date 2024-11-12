<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Package;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $packages = Package::all();
        return view('booking.index', compact('packages'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'package_id' => 'required|exists:packages,id',
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'travel_date' => 'required|date|after:today',
            'number_of_people' => 'required|integer|min:1|max:20'
        ]);

        $booking = Booking::create($validated);

        return redirect()->route('booking.success')->with('success', 'Booking confirmed successfully!');
    }
}
