<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts() {
        // hasOne, hasMany, belongsTo, BelongsToMany
        return $this->hasMany(Post::class);
    }
}
