<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function create()
    {
        return view('Auth.login');
    }

    public function store()
    {
        return redirect(route('register'));
    }
}
