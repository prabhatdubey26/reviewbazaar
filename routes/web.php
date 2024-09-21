<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\Auth\LoginController;

require __DIR__.'/admin.php';

Route::get('/', [HomeController::class, 'index']);
Route::get('/admin/login', [LoginController::class, 'create'])->name('login');
