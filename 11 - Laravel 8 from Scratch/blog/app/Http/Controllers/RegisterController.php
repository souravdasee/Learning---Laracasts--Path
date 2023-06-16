<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        // create the user
        $attributes = request()->validate([
            'name' => ['required', 'min:1', 'max:255'],
            'username' => ['required', 'min:3', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        User::create($attributes);

        return redirect('/');
    }
}
