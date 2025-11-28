<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        // Validation and user creation logic goes here
        $newUser=$request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $user=User::create($newUser);
        Auth::login($user);
        return redirect('/')->with('success','Welcome to CodeTalk, Dear ' .$user->name);
    }
    public function loginForm()
    {
        return view('auth.login');
    }
}
