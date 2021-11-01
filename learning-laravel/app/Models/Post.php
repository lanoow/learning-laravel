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
            $query->where(fn($query) =>
                $query->where('title', 'like', '%' . $s . '%')
                ->orWhere('content', 'like', '%' . $s . '%')));

        $query->when($filter['category'] ?? false, fn ($query, $category) =>
            $query->whereHas('category', fn ($query) =>
                $query->where('slug', $category)));

        $query->when($filter['author'] ?? false, fn ($query, $author) =>
            $query->whereHas('author', fn ($query) =>
                $query->where('name', $author)));
    }

    public function category() {
        // hasOne, hasMany, belongsTo, BelongsToMany
        return $this->belongsTo(Category::class);
    }

    public function author() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
