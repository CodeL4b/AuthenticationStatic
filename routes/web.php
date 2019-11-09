<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('category', function () {
    return view('category');
});

Route::get('post', function () {
    return view('post');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
