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

    // public function __construct()
    // {
    //     static::preventLazyLoading();
    // }

    // Accessor
    public function getTitleAttribute($value) {
        return lcfirst($value);
    }

    // Mutator
    public function setTitleAttribute($value) {
        $this->attributes['title'] = strtoupper($value);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
