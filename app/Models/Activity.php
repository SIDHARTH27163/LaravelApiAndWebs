<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    use HasFactory;
    protected $table = 'activities';
    protected $fillable = ['tourist_place_id', 'activity'];

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}
