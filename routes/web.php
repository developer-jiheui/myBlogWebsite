<?php

use App\Http\Controllers\PortfolioController;
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
//    Route::get('/', [PortfolioController::class, 'index'])->name('index');
//    Route::get('/create', [PortfolioController::class, 'create'])->name('create');
//    Route::get('/{portfolio}/edit', [PortfolioController::class, 'edit'])->name('edit');
//    Route::get('/{portfolio}', [PortfolioController::class, 'show'])->name('show');

    //TODO : change into Controller function with database
    Route::view('/club', 'pages.portfolio.club')->name('club');

});

Route::prefix('blog')->name('blog.')->group(function () {

    Route::view('/', 'pages.blog.index')->name('index');

    Route::view('/create', 'pages.blog.create')->name('create');

    Route::view('/{post}', 'pages.blog.show')->name('show');

    Route::view('/{post}/edit', 'pages.blog.edit')->name('edit');

});
