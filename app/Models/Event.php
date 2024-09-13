<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;




class Event extends Model
{
 use HasFactory;
    protected $fillable=[
        'id',
        'name',
        'description',
        'location',
        'date',
        'time',
        'max_attendees',
        
    ];
  protected  $casts = [
     'date' => 'datetime',
    'time' => 'datetime:H:i',
        ];
public function bookings()
{
    return $this->hasMany(Booking::class);
}
public function isFullyBooked()
{
    return $this->bookings->count() >= $this->max_attendees;
}

}

