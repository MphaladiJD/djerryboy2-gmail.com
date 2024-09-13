<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\hasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use hasApiTokens, HasFactory, Notifiable;

    
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
    ];

  
    
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    protected  $casts =[
    'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
public function bookings()
{
    return $this->hasMany(Booking::class);
}
public function isAdmin()
{
    return $this->role === 'admin';
}

}
