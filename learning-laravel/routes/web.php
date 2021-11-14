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
Route::get('/panel/', fn () => view('panel.index'))->name('panel-home')->middleware('admin');

Route::get('panel/posts/', [AdminPostController::class, 'all'])->name('panel-posts')->middleware('admin');

Route::get('/panel/posts/create', [AdminPostController::class, 'viewCreate'])->name('panel-posts-create')->middleware('admin');
Route::post('/panel/posts/create', [AdminPostController::class, 'create'])->name('panel-posts-create')->middleware('admin');

Route::get('/panel/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('admin');
Route::patch('/panel/posts/{post}', [AdminPostController::class, 'update'])->middleware('admin');
Route::delete('/panel/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('admin');
