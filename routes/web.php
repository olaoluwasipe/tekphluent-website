<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/why', [HomeController::class, 'why']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/interest-form', [HomeController::class, 'interest-form']);
Route::get('/course/{slug}', [HomeController::class, 'course']);
