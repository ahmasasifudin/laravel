<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login', [
            'title' => 'Login',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');

        // $remember_me = $request->has('remember_me') ? true : false;
    }

    // public function checkLogin(Request $request)
    // {
    //     $remember = $request->remember ? true : false;
    //     $up = $request->only('email','password');

    //     if (Auth::attempt($up, $remember)) {
    //         return redirect()->route('dashboard.index');
    //     }

    //     return redirect();
    // }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
