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
        'status'
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
    public function user()
    {
        return $this->belongsToMany(User::class, 'approvals');
    }
}
