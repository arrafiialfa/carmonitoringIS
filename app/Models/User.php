<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'role',
        'superior',
        'subordinates',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'password' => 'hashed',
    ];

    public function superior()
    {
        return $this->hasOne(User::class, 'id', 'superior');
    }

    public function subordinates()
    {
        return $this->hasMany(User::class, 'id', 'subordinates');
    }

    //many to many relationship
    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'approvals', 'user_id', 'approved_by');
    }

    public function processLog()
    {
        return $this->hasMany(ProcessLog::class);
    }
}
