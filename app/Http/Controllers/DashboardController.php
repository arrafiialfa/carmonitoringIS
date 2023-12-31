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
        $user = Auth::user();

        $managers = User::with('hasRole')->whereHas('hasRole', function ($query) {
            $query->where('management_level', 1);
        })->get();

        return view('dashboard', compact('bookings', 'drivers', 'managers', 'vehicles', 'user'));
    }
}
