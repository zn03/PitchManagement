<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = ['customer_name', 'customer_phone', 'customer_address', 'email', 'password'];
    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
