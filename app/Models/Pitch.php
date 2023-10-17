<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pitch extends Model
{
    use HasFactory;

    protected $table = 'pitches';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['pitch_number', 'pitch_type_id', 'pitch_status'];

    public function pitchType(){
        return $this->belongsTo(PitchType::class);
    }

    public function bookingDetail(){
        return $this->hasMany(BookingDetail::class);
    }
}
