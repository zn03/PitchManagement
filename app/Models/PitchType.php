<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PitchType extends Model
{
    use HasFactory;
    protected $table = 'pitch_types';
    public $timestamps = false;
    protected $fillable = ['pitchtype_name', 'pitchtype_price'];
}
