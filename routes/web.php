<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');
Route::get('posts/{slug}','PostController@show');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});

