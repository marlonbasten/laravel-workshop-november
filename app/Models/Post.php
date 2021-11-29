<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'content',
    ];

    // Accessor
    public function getTitleAttribute($value) {
        return lcfirst($value);
    }

    // Mutator
    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtoupper($value);
    }
}
