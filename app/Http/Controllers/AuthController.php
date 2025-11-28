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
    public function login(Request $request){
        $credential=$request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|string|min:8',
        ]);
        if (Auth::attempt($credential)) {
            return redirect('/')->with('success','Welcome back, Dear ' .Auth::user()->name);
        }else{
            return back()->withErrors(['email'=>'The provided credentials do not match our records.'])->withInput();
        }
    }   
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success','You have been logged out successfully.');
    }
}
