<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('posts.index', [ // s = search
            'posts' => Post::latest()->filter(request(['s', 'category', 'author']))->paginate(6)->withQueryString()
        ]);
    }

    public function show(Post $post) {
        return view('posts.show', [
            'post' => $post
        ]);
    }
}
