<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BooksController::class, 'show'])->name('books.show');

Route::get('/login', [ AuthController::class, 'indexLogin'])->name('login');
Route::post('/login', [ AuthController::class, 'processLogin']);

Route::get('/register', [ AuthController::class, 'indexRegister'])->name('register');
Route::post('/register', [ AuthController::class, 'processRegister']);

Route::get('/logout', [AuthController::class, 'processLogout'])->name('logout')->middleware('auth');

Route::get('{user:username}/profile', [UserController::class, 'profile'])->name('user.profile');

Route::fallback(function(){
    return redirect()->route('index');
    // return redirect()->route('index')->with(['Errors'=>'No route with this name']);
});