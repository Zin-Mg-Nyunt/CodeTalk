<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class,"index"]);
Route::get('/blogs/{blog:slug}',[BlogController::class,"show"]);

Route::get('/register', [AuthController::class, 'create'])->name('register.form');
Route::post('/register/store', [AuthController::class, 'store'])->name('register');

Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');