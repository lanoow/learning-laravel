<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\PostCommnetsController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;

// All
Route::get('/', [PostController::class, 'index'])->name('home');
Route::get('/post/{post:slug}', [PostController::class, 'show']);
Route::post('/post/{post:slug}/comments', [PostCommnetsController::class, 'store']);

Route::post('/newsletter', NewsletterController::class);

// Register
Route::get('/register', [RegisterController::class, 'create'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');
// Login
Route::get('/login', [SessionsController::class, 'create'])->middleware('guest');
Route::post('/login', [SessionsController::class, 'store'])->middleware('guest');
// Logout
Route::post('/logout', [SessionsController::class, 'destroy'])->middleware('auth');


// Admin
Route::middleware('can:admin')->group(function () {
    //Route::resource('/panel/', AdminPostController::class);


    Route::get('/panel/', fn () => view('panel.index'))->name('panel-home');

    Route::get('panel/posts/', [AdminPostController::class, 'all'])->name('panel-posts');

    Route::get('/panel/posts/create', [AdminPostController::class, 'viewCreate'])->name('panel-posts-create');
    Route::post('/panel/posts/create', [AdminPostController::class, 'create'])->name('panel-posts-create');

    Route::get('/panel/posts/{post}/edit', [AdminPostController::class, 'edit']);
    Route::patch('/panel/posts/{post}', [AdminPostController::class, 'update']);
    Route::delete('/panel/posts/{post}', [AdminPostController::class, 'destroy']);
});
