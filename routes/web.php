<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('blogs/index',);
});
Route::get('/blog', function () {
    return view('blogs/show',);
});