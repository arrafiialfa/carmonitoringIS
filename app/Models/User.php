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
        return $this->belongsTo(User::class, 'id', 'superior');
    }

    public function subordinates()
    {
        return $this->hasMany(User::class, 'superior', 'id');
    }

    //many to many relationship
    public function approvals()
    {
        return $this->hasMany(Approval::class, 'approved_by', 'id');
    }

    public function bookings()
    {
        return $this->belongsToMany(Booking::class, 'approvals', 'approved_by', 'booking_id');
    }

    public function processLogs()
    {
        return $this->hasMany(ProcessLog::class);
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role', 'id');
    }
}
