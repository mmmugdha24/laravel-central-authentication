<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\User;

class AuthController extends Controller
{
    //
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(RegisterFormRequest $request)
    {
        $data = $request->validated();

        try {
            User::create($data);

            return redirect()->route('login.form')->with('success', 'User created successfully');

        } catch (\Exception $error) {
            return back()->with('error', 'Failed to create user: '.$error->getMessage())->withInput();
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(LoginFormRequest $request)
    {
        $data = $request->validated();
        try {
            if (auth()->attempt($data)) {
                return redirect()->route('dashboard')->with('success', 'Logged in successfully');
            } else {
                return back()->with('error', 'Invalid credentials')->withInput();
            }
        } catch (\Exception $error) {
            return back()->with('error', 'Failed to login: '.$error->getMessage())->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('index')->with('success', 'Logged out successfully');
    }
}
