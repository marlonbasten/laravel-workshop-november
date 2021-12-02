<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    public function facilities()
    {
        return $this->belongsToMany(Facility::class)->withTimestamps();
    }

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class);
    }
}
