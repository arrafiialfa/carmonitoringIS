<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Vehicle;

class VehicleController extends Controller
{
    public function create(): View
    {

        $vehicles = vehicle::all();

        return view('vehicle.index', compact('vehicles'));
    }
}
