<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class TouristPlace extends Model
{
    use HasFactory;
    protected $table = 'tourist_places';
    protected $fillable = ['location_id', 'category', 'status', 'title', 'about'];

    public function location()
    {
        return $this->belongsTo(Location::class);
    }

    public function timeToVisits()
    {
        return $this->hasMany(TimeToVisit::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function accommodations()
    {
        return $this->hasMany(Accommodation::class);
    }

    public function tips()
    {
        return $this->hasMany(Tip::class);
    }

    public function transportations()
    {
        return $this->hasMany(Transportation::class);
    }

    public function gallery()
    {
        return $this->hasMany(PlacesGallery::class);
    }

}
