<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\GoogleAuthController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\LogoutController;




/**
 * with Google Call back api
 */

 Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
 Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('google.auth');


/**
 * Without Google
 *
 */
Route::prefix('Auth')->group(function(){
    Route::get('/Login',[LoginController::class,'LoginController@loginview'])->name('view.login');
    Route::post('/login/process',[LoginController::class,'LoginController@Login'])->name('auth.login');
    Route::get('/Register',[RegisterController::class,'RegisterController@RegisterView'])->name('view.register');
    Route::post('/Register/Process',[RegisterController::class,'RegisterController@Register'])->name('auth.register');
    Route::post('/logout',[LogoutController::class,'LogoutController@logout'])->name('auth.logout');
});
