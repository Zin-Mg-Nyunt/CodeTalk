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

Route::middleware(['admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/blogs', [AdminController::class, 'index'])->name('admin.index');
    // for version 2
    Route::get('/admin/categories', [AdminController::class, 'index'])->name('admin.categories');
    Route::get('/admin/users', [AdminController::class, 'index'])->name('admin.users');
    Route::get('/admin/comments', [AdminController::class, 'index'])->name('admin.comments');

    Route::get('/admin/blogs/create', [AdminController::class, 'create'])->name('admin.blogs.create');
    Route::post('/admin/blogs/store', [AdminController::class, 'store'])->name('admin.blogs.store');
    Route::get('/admin/blogs/{blog:slug}/edit', [AdminController::class, 'edit'])->name('admin.blogs.edit');
    Route::patch('/admin/blogs/{blog:slug}/update', [AdminController::class, 'update'])->name('admin.blogs.update');
    Route::delete('/admin/blogs/{blog}/delete',[AdminController::class, 'destroy'])->name('admin.blogs.delete');
});

