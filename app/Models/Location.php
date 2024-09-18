<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Location extends Model
{
    use HasFactory;
    protected $table = 'locations';
    protected $fillable = [
        'status',
        'name',
        'address',
        'image',
    ];

    public function touristPlaces(): HasMany
    {
        return $this->hasMany(TouristPlace::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($location) {
            // Delete associated TouristPlace records
            $location->touristPlaces()->delete();
        });
    }
}
