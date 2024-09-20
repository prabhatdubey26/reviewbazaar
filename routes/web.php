<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

require __DIR__.'/admin.php';
Route::get('/', [HomeController::class, 'index']);