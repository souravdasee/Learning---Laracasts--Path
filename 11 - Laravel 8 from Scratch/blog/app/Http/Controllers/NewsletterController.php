<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['iemail' => 'required | email']);

        try {
            $newsletter->subscribe(request('iemail'));
        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'iemail' => 'This email could not be added to our newsletter list.'
            ]);
        }

        return redirect('/')->with('success', 'You are now signed up for our newsletter!');
    }
}
