<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'fuel_consumptions',
        'service_schedule',
        'type',
        'plate_number',
        'name'
    ];

    public function booking()
    {
        return $this->belongsToMany(User::class, 'approvals');
        //return $this->belongsTo(Booking::class,'local_key','foreign_key')
    }
}
