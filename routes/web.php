<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'Home.index')->name('homepage');

Route::middleware('guest')->group(function () {
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login.store');

    Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register.store');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard/quizes', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/quizes/create', [QuizController::class, 'create'])->name('quizes.create');
    Route::post('/dashboard/quizes', [QuizController::class, 'store'])->name('quizes.store');
    Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');
});
