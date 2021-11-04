<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostCommnetsController extends Controller {
    public function store(Post $post) {
        // Validation
        request()->validate([
            'comment' => ['required']
        ]);

        $post->comments()->create([
            'user_id' => request()->user()->id,
            'content' => request('comment')
        ]);

        return back();
    }
}
