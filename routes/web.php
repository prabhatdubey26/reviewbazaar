<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;

require __DIR__.'/admin.php';

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/google/redirect', [LoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [LoginController::class, 'handleGoogleCallback'])->name('google.callback');
Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/{slug}', [HomeController::class, 'page']);