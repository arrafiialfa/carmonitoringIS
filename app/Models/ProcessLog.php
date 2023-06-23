<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProcessLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'activity',
        'message',
        'error',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
