<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeToVisit extends Model
{
    use HasFactory;
    protected $table = 'time_to_visits';
    protected $fillable = ['tourist_place_id', 'time_to_visit'];

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}
