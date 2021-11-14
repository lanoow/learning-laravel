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

    public function create() {
        $attributes = request()->validate([
            'title' => 'required|min:2|max:255',
            'photo' => 'image',
            'slug' => ['required', 'min:2', 'max:255', Rule::unique('posts', 'slug')],
            'excerpt' => 'required|max:120',
            'category_id' => ['required', Rule::exists('categories', 'id')],
            'content' => 'required',
        ]);

        $attributes['user_id'] = auth()->id();
        if (empty($attributes['photo'])) {
            $attributes['photo'] = 'https://picsum.photos/1920/1080';
        } else {
            $attributes['photo'] = request()->file('photo')->store('photos');
        }
        $attributes['photoAlt'] = $attributes['title'] . ' Image';

        Post::create($attributes);

        return redirect('/')->with('success', 'Your post has been created successfully!');
    }

    public function edit(Post $post) {
        return view('panel.posts.edit', ["post" => $post]);
    }

    public function update(Post $post) {

        $attributes = request()->validate([
            'title' => 'min:2|max:255',
            'photo' => 'image',
            'slug' => ['min:2', 'max:255', Rule::unique('posts', 'slug')->ignore($post->id)],
            'excerpt' => 'max:120',
            'category_id' => Rule::exists('categories', 'id'),
            'content' => 'min:2',
        ]);

        $attributes['user_id'] = auth()->id();
        if (!empty($attributes['photo'])) {
           $attributes['photo'] = request()->file('photo')->store('photos');
        }
        $attributes['photoAlt'] = $attributes['title'] . ' Image';

        $post->update($attributes);

        return back()->with('success', 'Successfully updated the post!');
    }

    public function destroy(Post $post) {
        $post->delete();

        return back()->with('success', 'Successfully deleted the post!');
    }
}
