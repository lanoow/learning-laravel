<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller {
    public function create() {
        return view('auth.login');
    }

    public function store() {
        // Valid the request
        $attributes = request()->validate([
            'username' => ['required', 'exists:users,username'],
            'password' => ['required']
        ]);

        // Try to authenticate and log the user in
        if (Auth::attempt($attributes)) {
            session()->regenerate();
            // Redirect
            return redirect('/')->with('success', 'Successfully logged in! Welcome back!');
        } else {
            // Throw an error if the validation fails
            throw ValidationException::withMessages(['username' => 'The provided credentials are wrong.']);
        }
    }

    public function destroy() {
        Auth::logout();

        return redirect('')->with('success', 'Successfully logged out! Goodbye!');
    }
}
