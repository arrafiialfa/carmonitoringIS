<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{

    protected $fillable = [
        'name',
        'level',
        'desccription'
    ];

    use HasFactory;
}
