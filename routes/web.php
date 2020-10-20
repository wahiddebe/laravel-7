<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('posts', 'PostController@index')->name('posts.index');
Route::middleware('auth')->group(function () {
    Route::get('posts/create', 'PostController@create')->name('posts.create');
    Route::post('posts/store', 'PostController@store');
    Route::get('posts/{post:slug}/edit', 'PostController@edit');
    Route::patch('posts/{post:slug}/edit', 'PostController@update');
    Route::delete('posts/{post:slug}/delete', 'PostController@destroy');
});


Route::get('categories/{category:slug}', 'CategoryController@show');
Route::get('tags/{tag:slug}', 'TagController@show');

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
