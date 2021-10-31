<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('homepage', [
            'posts' => Post::latest()->filter(request(['s']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Post $post) {
        return view('post', [
            'post' => $post
        ]);
    }
}
