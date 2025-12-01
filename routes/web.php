<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class,"index"])->name('blogs.index');
Route::get('/blogs/{blog:slug}',[BlogController::class,"show"])->name('blogs.show');
Route::post('/blogs/{blog:slug}/comment',[CommentController::class,"storeComment"])->name('comment.store');
Route::post('/blogs/{blog:slug}/subscription',[BlogController::class,"subscriptionHandler"])->name('subscription.handle');

// Authentication Routes
Route::get('/register', [AuthController::class, 'create'])->name('register.form')->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->name('register');
Route::get('/login', [AuthController::class, 'loginForm'])->name('login.form')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/logout', function(){
    return redirect('/');
});

Route::get('/admin/blogs/create', [AdminController::class, 'create'])->name('admin.blogs.create')->middleware('admin');
Route::post('/admin/blogs/store', [AdminController::class, 'store'])->name('admin.blogs.store')->middleware('admin');