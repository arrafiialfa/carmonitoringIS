<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Driver;

class DriverController extends Controller
{
    public function create(): View
    {

        $drivers = Driver::all();

        return view('driver.index', compact('drivers'));
    }
}
