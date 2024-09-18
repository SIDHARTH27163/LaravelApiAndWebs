<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'table_name',
        'status'
    ];
    public function touristPlaces()
    {
        return $this->hasMany(TouristPlace::class, 'category' , 'name'); // Adjust the foreign key if necessary
    }
}
