<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterUserController extends Controller
{
    public function create()
    {
        return view('Auth.register');
    }

    public function store() {}
    //
}
