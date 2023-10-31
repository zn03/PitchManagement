<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use HasFactory;
    protected $table = 'staffs';
    protected $primaryKey = 'id';
     public $timestamps = false;
    protected $fillable = ['staff_name', 'email', 'password', 'staff_phone', 'staff_address'];

    use Authenticatable;

    public function bookings(){
        return $this->hasMany(Booking::class);
    }
}
