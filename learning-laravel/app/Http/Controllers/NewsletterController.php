<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Exception;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;

class NewsletterController extends Controller {
    public function __invoke(Newsletter $newsletter) {
        request()->validate(['newsletter_email' => 'required|email']);

        try {
            $newsletter->subscribe(request('newsletter_email'));
        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'newsletter_email' => 'This email has already been used or could not be added to our newsletter.'
            ]);
        }

        return redirect('/')->with('success', 'You are now all signed up for our amazing newsletter!');
    }
}
