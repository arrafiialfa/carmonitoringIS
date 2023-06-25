<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\RedirectResponse;
use App\Models\Approval;
use App\Models\Booking;


class ApprovalController extends Controller
{
    public function update(Request $request): RedirectResponse
    {

        //steps
        //get request payload
        //update approval with the request payload

        //if(payload.status == 'tolak')
        //yes: 
        //update booking status == "ditolak"
        //done, redirect to dashboard

        //check if user has superior
        //yes : 
        //update booking status == 'approved by $user, menunggu persetujuan dari $user->superior '
        //create new approval
        //assign approval->approved_by to user->superior
        //no: 
        //change booking status == 'persetujuan selesai' 

        //done reditect

        $request->validate([
            'approval_id' => ['required'],
            'booking_id' => ['required'],
            'status' => ['required', 'string'],
        ]);

        $user = Auth::user();

        $current_approval = Approval::find($request->approval_id);
        $current_approval->status = $request->status;

        $current_booking = Booking::findOrFail($request->booking_id);
        $current_booking->status = "{$request->status} Oleh {$user}";

        if ($request->status == "Ditolak") {
            $current_booking->status = $request->status;
            $current_booking->save();
            return Redirect::route('dashboard');
        }

        if ($user->hasSuperior) {
            $nextApproval = Approval::create([
                'booking_id' => $request->booking_id,
                'approved_by' => $user->hasSuperior->id,
                'status' => 'Menunggu Persetujuan',
            ]);
            $current_approval->next_approval = $nextApproval->id;
            $current_booking->status = "Menunggu Persetujuan Dari {$user->hasSuperior}";
        } else {
            $current_booking->status = "Persetujuan Selesai";
        }

        $current_approval->save();

        return redirect()->route('booking.edit', ['id' => $request->booking_id])->with('status', 'booking updated');
    }
}
