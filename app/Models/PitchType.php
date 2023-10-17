<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PitchType extends Model
{
    use HasFactory;
    protected $table = 'pitch_types';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = ['pitchtype_name', 'pitchtype_price'];
    public function pitches(){
        return $this->hasMany(Pitch::class);
    }
}
