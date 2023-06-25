<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;

class SubordinatesController extends Controller
{
    public function create(Request $request): View
    {
        $user = Auth::user();
        $current_role = Role::where('id', $user->role)->first();
        $current_level = $current_role->management_level;

        $potential_subordinates = User::with('hasRole')->whereHas('hasRole', function ($query) use ($user, $current_level) {
            $query->where('management_level', $current_level - 1)->where(function ($query) use ($user) {
                $query->where('superior', '!=', $user->id)
                    ->orWhereNull('superior');
            });
        })->get();



        return view('subordinates.index', compact('potential_subordinates', 'user'));
    }

    public function update(Request $request): RedirectResponse
    {

        $request->validate([
            'subordinate_id' => ['required'],
        ]);

        $current_user = Auth::user();
        $subordinate = User::find($request->subordinate_id);
        $subordinate->superior = $current_user->id;
        $subordinate->save();

        return Redirect::route('subordinates')->with('status', 'subordinate-added');
    }
}
