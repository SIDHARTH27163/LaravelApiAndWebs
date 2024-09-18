<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITService extends Model
{
    use HasFactory;

    // Explicitly define the table name
    protected $table = 'it_services';

    // Define the fillable fields for mass assignment
    protected $fillable = ['name', 'status', 'description', 'image'];
}
