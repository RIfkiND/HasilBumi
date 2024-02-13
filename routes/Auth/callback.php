<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\GoogleAuthController;

Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback']);


