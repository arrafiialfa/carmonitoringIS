<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Approval extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'approved_by',
        'next_approval',
        'status',
        'note',
    ];



    public function nextApproval()
    {
        return $this->belongsTo(Approval::class, 'id', 'next_approval');
    }

    public function previousApproval()
    {
        return $this->hasOne(Approval::class, 'next_approval', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'approved_by', 'id');
    }

    public function booking()
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }
}
