<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ITCaseStudy extends Model
{
    use HasFactory;
    protected $table = 'casestudies';
    protected $fillable = [
        'title',
        'description',
        'image',
    ];
    public function galleries()
    {
        return $this->hasMany(Gallery::class, 'foreign_key', 'local_key');
        // replace 'foreign_key' and 'local_key' with actual column names
    }
}
