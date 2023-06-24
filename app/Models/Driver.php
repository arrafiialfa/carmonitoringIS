<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'sex',
        'driving_hours'
    ];

    public function booking()
    {
        return $this->hasOne(Booking::class);
    }
}
