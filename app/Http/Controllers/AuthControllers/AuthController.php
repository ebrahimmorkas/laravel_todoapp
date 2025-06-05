<?php

namespace App\Http\Controllers\AuthControllers;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AuthController extends Controller
{
    public function showRegister() {
        return view("auth.register");
    }

    public function register(Request $request) {

        // Validating the user
        $validatedResponse = $request->validate(
            [
                "email"=> ['required', 'email', 'max:254', 'unique:users,email'],
                'password'=> ['required','min:8', 'max:10'],
                'firstname'=>['required','min:2'],
                'lastname'=>['required','min:2'],
            ]
            );

            // Adding the user to database
            $user = User::Create($validatedResponse);

            // Logging in the user
        Auth::login($user);

        // Redirecting the user
        return redirect('/');
    }
}
