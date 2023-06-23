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
        'scheduled_date',
        'returned_date',
        'status'
    ];


    public function vehicle()
    {
        return $this->hasOne(Vehicle::class);
        //hasOne(model,foreignKey,localKey)
    }

    public function driver()
    {
        return $this->hasOne(Driver::class);
    }

    public function approvals()
    {
        return $this->hasMany(Approval::class);
    }
}
