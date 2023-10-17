<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table = 'bookings';
    public $timestamps = false;

    protected $primaryKey = 'id';
    protected $fillable = ['booking_date', 'booking_notes', 'booking_status', 'staff_id', 'timeline_id', 'customer_id'];

    public function staffs(){
        return $this->belongsTo(Staff::class);
    }
    public function timelines(){
        return $this->belongsTo(Timeline::class);
    }
    public function customers(){
        return $this->belongsTo(Customer::class);
    }
    public function bookingDetail(){
        return $this->hasMany(BookingDetail::class);
    }
}
