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
        'note',
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function approved_by()
    {
        return $this->hasOne(User::class, 'user_id', 'approved_by');
    }
}
