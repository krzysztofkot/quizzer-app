<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('Auth.register');
    }

    public function store(Request $request)
    {
        $userData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(6)->mixedCase(), 'confirmed']
        ]);

        $user = User::create($userData);
        Auth::login($user);

        return redirect()->route('dashboard.index');
    }
    //
}
