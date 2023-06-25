<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Models\Booking;
use App\Models\Approval;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{

    public function create($id)
    {
        $booking = Booking::findOrFail($id);
        $user = Auth::user();
        return view('booking.index', compact('booking', 'user'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'vehicle_id' => ['required', 'string'],
            'driver_id' => ['required', 'string'],
            'bookedBy' => ['required', 'string',],
            'scheduled_date' => ['required', 'date'],
            'returned_date' => ['required', 'date'],
            'manager_id' => ['required'],
        ]);


        $booking = Booking::create([
            'vehicle_id' => $request->vehicle_id,
            'driver_id' => $request->driver_id,
            'bookedBy' => $request->bookedBy,
            'scheduled_date' => $request->scheduled_date,
            'returned_date' => $request->returned_date,
            'status' => 'Menunggu Persetujuan'
        ]);


        Approval::create([
            'booking_id' => $booking->id,
            'approved_by' => $request->manager_id,
            'status' => 'Menunggu Persetujuan',
        ]);

        return Redirect::route('dashboard')->with('status', 'booking-added');
    }
}
