<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlacesGallery extends Model
{
    use HasFactory;
    protected $table = 'placesgallery';

    // Fillable attributes (to allow mass assignment)
    protected $fillable = ['tourist_place_id', 'gallery'];

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}
