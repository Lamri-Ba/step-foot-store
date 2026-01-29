<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // register method 

    public function register(Request $request)
    {
        // this is for validation of name and email and pass 
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // creat db in user table 
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 
return back()->with('success', 'Account created successfully! You can now login.');
    }

    // login method for user that are already registred 
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // if the user email and password are correct  redirect to products page ***jiust for now **
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('products');
        }

        // if the there is an errors rerturn this 
        return back()->withErrors(['email' => 'Invalid ']);
    }
}