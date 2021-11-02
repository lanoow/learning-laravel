<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller {
    public function create() {
        return view('auth.create');
    }

    public function store() { // Create the user
        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'min:3', 'max:16', 'unique:users,username'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        $user = User::create($attributes);

        // Log the user in
        Auth::login($user);

        return redirect('/')->with('success', 'Your account has been successfully created!');
    }
}
