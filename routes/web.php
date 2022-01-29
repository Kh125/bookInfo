<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// index
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [BooksController::class, 'apiIndex'])->name('books.api');
// index

// books index and show by id
Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BooksController::class, 'show'])->name('books.show');
// books

// auth-login/register/logout
Route::get('/login', [ AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [ AuthController::class, 'processLogin'])->name('login.post');

Route::get('/register', [ AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [ AuthController::class, 'processRegister']);

Route::get('/logout', [AuthController::class, 'processLogout'])->name('logout');
// auth-end

// show fav and process to add to fav.
Route::get('/favourite', [BooksController::class, 'showFavourite'])->name('favourite');
Route::get('/fav/{id}', [BooksController::class, 'favToggle'])->name('fav.toggle');
// fav

// upload books by user index and process form
Route::get('/upload', [BooksController::class, 'indexUpload'])->name('upload')->middleware('auth');
Route::post('/upload', [BooksController::class, 'processUpload'])->middleware('auth');
// upload

// user-profile
Route::get('{user:username}/profile', [UserController::class, 'profile'])->name('user.profile');
Route::post('{user:username}/profile', [UserController::class, 'editProfile'])->name('user.editProfile');
// profile

// search by all
Route::get('/search/page/{page?}',[BooksController::class, 'searchBooks'])->name('books.search');

// search by author
Route::get('/search/author/page/{page?}',[BooksController::class, 'authorBooks'])->name('author.books');
// search

// route back to index when no route with given input
Route::fallback(function(){
    return redirect()->route('index');
    // return redirect()->route('index')->with(['Errors'=>'No route with this name']);
});