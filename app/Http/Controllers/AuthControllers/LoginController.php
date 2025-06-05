<?php

namespace App\Http\Controllers\AuthControllers;
use App\Http\Controllers\Controller;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin() {
        return view('auth.login');
    }

    public function login(Request $request) {
        $credentials = $request->validate(
            [
                'email'=> ['required', 'email'],
                'password'=> ['required'],
            ]
            );

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->withInput()->with('error', 'Invalid credentials. Pleasen try again');
    }
}