<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingDetail extends Model
{
    use HasFactory;
    protected $table = 'booking_details';
    public $timestamps = false;
    protected $fillable = ['booking_id', 'pitch_id', 'current_price'];

    public function bookings(){
        return $this->belongsTo(Booking::class);
    }
    public function pitches(){
        return $this->belongsTo(Pitch::class);
    }
}
