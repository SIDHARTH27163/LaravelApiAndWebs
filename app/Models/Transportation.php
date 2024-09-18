<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;
    protected $table = 'transportations';
    protected $fillable = ['tourist_place_id', 'transportation'];

    public function touristPlace()
    {
        return $this->belongsTo(TouristPlace::class);
    }
}
