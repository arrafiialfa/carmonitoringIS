<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'bookedBy',
        'scheduled_date',
        'returned_date',
        'status',
        'fuel_consumptions',
    ];


    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    //many to many relationship
    public function approvals()
    {
        return $this->hasMany(Approval::class, 'booking_id', 'id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'approvals', 'booking_id', 'approved_by');
    }
}
