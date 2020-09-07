<?php

use Illuminate\Support\Facades\Route;
//rutas para book
Route::resource('books','BookController');
Route::resource('authors','AuthorController');

Route::get('/', function () {
    return view('base');
});

Route::get('home', function () {
    return view('book.userbook');
})->name('home')->middleware('auth');

Auth::routes();
