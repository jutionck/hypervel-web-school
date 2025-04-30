<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\frontend\FeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FeController::class, 'indexFe'])->name('landingpage');

Route::get('/home', [HomeController::class, 'indexPage'])->name('home');
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
