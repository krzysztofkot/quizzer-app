<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

// Route::view('/', 'Home.index');

Route::prefix('login')->middleware(['guest'])->group(function () {
    Route::get('/', [SessionController::class, 'create'])->name('login');
    Route::post('/', [SessionController::class, 'store'])->name('login.store');
});
Route::get('/', HomeController::class)->name('homepage');


Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
