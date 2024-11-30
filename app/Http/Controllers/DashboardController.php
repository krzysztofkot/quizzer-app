<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $quizes = $user->quizes->all();
        return view('Dashboard.index', ['quizes' => $quizes]);
    }
}
