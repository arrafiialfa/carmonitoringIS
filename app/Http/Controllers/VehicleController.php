<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Vehicle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class VehicleController extends Controller
{
    public function create(): View
    {

        $vehicles = vehicle::all();

        return view('vehicle.index', compact('vehicles'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'plate_number' => ['required', 'string', 'max:255', 'unique:' . Vehicle::class],
            'type' => ['required', 'string', 'max:255',],
        ]);

        Vehicle::create([
            'name' => $request->name,
            'plate_number' => $request->plate_number,
            'type' => $request->type,
        ]);

        return Redirect::route('vehicle')->with('status', 'vehicle-added');
    }
}
