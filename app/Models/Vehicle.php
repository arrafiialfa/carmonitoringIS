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
        'last_serviced',
        'type',
        'plate_number',
        'name'
    ];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
