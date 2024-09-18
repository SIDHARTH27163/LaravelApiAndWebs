<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accommodation extends Model
{
    use HasFactory;
    protected $table = 'accommodations';
    protected $fillable = ['tourist_place_id', 'accommodation'];

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}
