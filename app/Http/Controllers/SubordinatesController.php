<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class SubordinatesController extends Controller
{
    public function create(Request $request): View
    {
        $current_user = Auth::user();
        $current_role = Role::where('id', $current_user->role)->first();
        $current_level = $current_role->management_level;

        $potential_subordinates = User::whereHas('role', function ($query) use ($current_level) {
            $query->where('management_level', $current_level - 1);
        })->get();

        $subordinates = User::whereHas('superior', function ($query) use ($current_user) {
            $query->where('superior', $current_user->id);
        })->get();

        return view('subordinates.index', compact('potential_subordinates', 'subordinates'));
    }
}
