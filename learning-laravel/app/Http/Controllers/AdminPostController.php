<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class AdminPostController extends Controller {
    public function all() {
        return view('panel.posts.index', [
            'posts' => Post::paginate(100),
        ]);
    }

    public function viewCreate() {
        return view('panel.posts.create');
    }

    protected function validatePost(?Post $post = null): array {
        $post ??= new Post();
        return request()->validate([
            'title' => 'required|min:2|max:255',
            'photo' => $post->exists ? ['image'] : ['required', 'image'],
            'slug' => ['required', 'min:2', 'max:255', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'required|max:120',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'content' => 'required',
        ]);
    }

    public function create() {
        Post::create(array_merge($this->validatePost(), [
            'user_id' => auth()->id(),
            'photo' => request()->file('photo')->store('photos'),
            'photoAlt' => 'Blog Image',
        ]));

        return redirect('/')->with('success', 'Your post has been created successfully!');
    }

    public function edit(Post $post) {
        return view('panel.posts.edit', ["post" => $post]);
    }

    public function update(Post $post) {
        $attributes = array_merge($this->validatePost($post), [
            'user_id' => auth()->id(),
            'photoAlt' => 'Blog Image',
        ]);

        if ($attributes['photo'] ?? false) {
            $attributes['photo'] = request()->file('photo')->store('photos');
         }

        $post->update($attributes);

        return back()->with('success', 'Successfully updated the post!');
    }

    public function destroy(Post $post) {
        $post->delete();

        return back()->with('success', 'Successfully deleted the post!');
    }
}
