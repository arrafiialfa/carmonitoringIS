<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;

class SubordinatesController extends Controller
{
    public function create(Request $request): View
    {

        $subordinates = [];
        return view('subordinates.index', compact('subordinates'));
    }
}
