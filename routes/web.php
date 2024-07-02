<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;



use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/profil', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class, 'index'])->name('login');





Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
