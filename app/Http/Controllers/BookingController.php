<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Booking;
use App\Models\Driver;
use App\Models\User;

class BookingController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'vehicle_id' => ['required', 'string'],
            'driver_id' => ['required', 'string'],
            'bookedBy' => ['required', 'string',],
            'scheduled_date' => ['required', 'date'],
            'returned_date' => ['required', 'date'],
        ]);


        Booking::create([
            'vehicle_id' => $request->vehicle_id,
            'driver_id' => $request->driver_id,
            'bookedBy' => $request->bookedBy,
            'scheduled_date' => $request->scheduled_date,
            'returned_date' => $request->returned_date,
            'status' => 'Menunggu Persetujuan'
        ]);

        return Redirect::route('dashboard')->with('status', 'booking-added');
    }
}
