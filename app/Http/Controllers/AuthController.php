<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginFormRequest;
use App\Http\Requests\RegisterFormRequest;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Support\Facades\DB;

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
            DB::transaction(function () use ($data) {
                $organization = Organization::create(['name' => $data['organization']])->id;

                $data['organization_id'] = $organization;
                unset($data['organization']);

                User::create($data);
            });
            auth()->attempt(['email' => $data['email'], 'password' => $data['password']]);
            return redirect()->route('dashboard')->with('success', 'User created & logged in successfully');
        } catch (\Exception $error) {
            return back()->with('error', 'Failed to create user: ' . $error->getMessage())->withInput();
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
            return back()->with('error', 'Failed to login: ' . $error->getMessage())->withInput();
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('index')->with('success', 'Logged out successfully');
    }
}
