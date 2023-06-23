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



    public function nextApproval()
    {
        return $this->hasOne(Approval::class, 'approval_id', 'next_approval');
    }
}
