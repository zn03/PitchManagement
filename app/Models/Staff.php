<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $table = 'staffs';
    protected $primaryKey = 'id';
     public $timestamps = false;
    protected $fillable = ['staff_name', 'email', 'password', 'staff_phone', 'staff_address'];
}
