<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model {
    use HasFactory;

    protected $guarded = ['id', 'link', 'button'];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filter) {
        $query->when($filter['s'] ?? false, fn ($query, $s) =>
            $query
                ->where('title', 'like', '%' . $s . '%')
                ->orWhere('content', 'like', '%' . $s . '%'));
    }

    public function category() {
        // hasOne, hasMany, belongsTo, BelongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
