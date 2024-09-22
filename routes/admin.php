<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CompanyController;


use Illuminate\Support\Facades\Route;

Route::get('/admin', [LoginController::class, 'create'])->name('admin.login');
Route::post('/admin', [LoginController::class, 'store'])->name('admin.store');

Route::prefix('admin')->middleware(['admin.auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');

    Route::resource('pages', PageController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('company', CompanyController::class);

    Route::get('logout', [LoginController::class, 'destroy'])->name('admin.logout');

});