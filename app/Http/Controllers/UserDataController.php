<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class UserDataController extends Controller
{
    public function register_page()
    {
        return view('register');
    }
    public function register_user(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);
        return redirect('/');
    }
    public function login_page()
    {
        return view('login');
    }
    public function login_user(LoginRequest $request)
    {
        $request->authenticate();
        $request->session()->regenerate();
        return redirect('register');
    }

    public function logout_user(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
