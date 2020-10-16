<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController');
Route::get('posts', 'PostController@index');

Route::get('posts/create', 'PostController@create');
Route::post('posts/store', 'PostController@store');

Route::get('posts/{post:slug}/edit', 'PostController@edit');
Route::patch('posts/{post:slug}/edit', 'PostController@update');

Route::delete('posts/{post:slug}/delete', 'PostController@destroy');

Route::get('posts/{post:slug}', 'PostController@show');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/login', function () {
    return view('login');
});
