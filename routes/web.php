<?php

use Illuminate\Support\Facades\Route;

//PAGES
Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
//Route::view('/portfolio', 'pages.portfolio.index')->name('portfolio.index');
Route::prefix('portfolio')->name('portfolio.')->group(function () {
    Route::view('/', 'pages.portfolio.index')->name('index');
    Route::view('/create', 'pages.portfolio.create')->name('create');
    Route::view('/edit', 'pages.portfolio.edit')->name('edit');
    Route::view('/show', 'pages.portfolio.show')->name('show');
});
Route::prefix('blog')->name('blog.')->group(function () {
    Route::view('/', 'pages.blog.index')->name('index');
});

