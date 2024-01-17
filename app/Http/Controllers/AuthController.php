<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function formLogin() {
        if (auth('web')->check()) {
            return redirect()->route('user.dashboard');
        } else {
            return view('user.auth.login');
        }
    }

    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth('web')->attempt($request->only(['email', 'password']))) {
            return redirect()->route('user.dashboard');
        } else {
            return redirect()->route('user.login')->with('error', 'Email atau password salah');
        }
    }

    public function logout() {
        auth('web')->logout();
        return redirect()->route('user.login');
    }
}
