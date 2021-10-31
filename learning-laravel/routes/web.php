<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('homepage', [
        'posts' => Post::latest()->get() // Old: Post::latest()->with('category', 'author')->get() | Moved to Post Module/Class
    ]);
});

Route::get('post/{post:slug}', function (Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('category/{category:slug}', function (Category $category) {
    return view('homepage', [
        'posts' => $category->posts // Old: $author->posts->load('category', 'author') | Moved to Post Module/Class
    ]);
});

Route::get('author/{author:name}', function (User $author) {
    return view('homepage', [
        'posts' => $author->posts // Old: $author->posts->load('category', 'author') | Moved to Post Module/Class
    ]);
});
