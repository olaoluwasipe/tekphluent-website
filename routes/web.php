<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/why', [HomeController::class, 'why']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/interest-form', [HomeController::class, 'interestForm'])->name('interest-form');
Route::get('/course/{slug}', [HomeController::class, 'course']);
Route::get('/review-form', [HomeController::class, 'reviewForm']);

Route::post('/interest', [InterestController::class, 'store']);
Route::post('/review', [ReviewController::class, 'store']);
Route::post('/contact', [ContactController::class, 'store']);
