<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Driver;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class DriverController extends Controller
{
    public function create(): View
    {

        $drivers = Driver::all();

        return view('driver.index', compact('drivers'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'age' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'driving_hours' => ['required', 'integer'],
        ]);

        Driver::create([
            'name' => $request->name,
            'age' => $request->age,
            'sex' => $request->sex,
            'driving_hours' => $request->driving_hours,
        ]);

        return Redirect::route('driver')->with('status', 'driver-added');
    }
}
