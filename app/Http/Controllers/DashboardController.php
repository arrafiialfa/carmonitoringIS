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
use App\Models\Vehicle;

class DashboardController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function create(): View
    {
        $bookings = Booking::with('vehicle')->get();
        $drivers = Driver::all();
        $vehicles = Vehicle::all();
        $managers = User::where('role', 'manager')->whereDoesntHave('subordinates')->get();

        return view('dashboard', compact('bookings', 'drivers', 'managers', 'vehicles'));
    }

    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'vehicle_id' => ['required', 'string'],
            'driver_id' => ['required', 'string'],
            'bookedBy' => ['required', 'string',],
            'scheduled_date' => ['required', 'date'],
            'returned_date' => ['required', 'date'],
        ]);


        $booking = Booking::create([
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
