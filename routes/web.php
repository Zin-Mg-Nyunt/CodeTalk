<?php

use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BlogController::class,"index"]);
Route::get('/blog', function () {
    return view('blogs/show',);
});