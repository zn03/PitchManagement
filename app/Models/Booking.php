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
    protected $fillable = ['booking_date', 'booking_note', 'booking_status', 'staff_id', 'timeline_id', 'customer_id'];

    public function staffs(){
        return $this->belongsTo(Staff::class, 'staff_id');
    }
    public function timelines(){
        return $this->belongsTo(Timeline::class, 'timeline_id');
    }
    public function customers(){
        return $this->belongsTo(Customer::class, 'customer_id');
    }
    public function bookingDetail(){
        return $this->hasMany(BookingDetail::class);
    }
}
