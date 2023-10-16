<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timeline extends Model
{
    use HasFactory;
    protected $table = 'timelines';
    public $timestamps = false;
    protected $fillable = ['timeline_start', 'timeline_end', 'timeline_price'];
}
