<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class SubordinatesController extends Controller
{
    public function create(Request $request): View
    {
        return view('subordinates.index');
    }
}
