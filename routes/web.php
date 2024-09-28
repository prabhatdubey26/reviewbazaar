<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BlogController;



require __DIR__.'/admin.php';

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::post('/signup', [LoginController::class, 'register'])->name('register');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog-details');
Route::get('/categories/{slug}', [CategoryController::class, 'show']);


Route::get('/google/redirect', [LoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/{slug}', [HomeController::class, 'page']);