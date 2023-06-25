<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Role extends Model
{

    protected $fillable = [
        'name',
        'management_level',
        'description'
    ];

    public function users()
    {
        return $this->hasMany(User::class, 'role', 'id');
    }

    use HasFactory;
}
