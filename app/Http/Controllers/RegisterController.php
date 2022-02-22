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
        //create and store user

        $attributes = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'min:3'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255', 'min:6']
        ]);

        User::create($attributes);

        return redirect('/');
    }
}