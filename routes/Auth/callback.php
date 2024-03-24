<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\Auth\GoogleAuthController;
use App\Http\Controllers\User\Auth\LoginController;
use App\Http\Controllers\User\Auth\RegisterController;
use App\Http\Controllers\User\Auth\LogoutController;
use App\Http\Controllers\User\Auth\ForgotPasswordController;
use App\Http\Controllers\User\Auth\ResetPasswordController;



/**
 * with Google Call back api
 */

 Route::get('/auth/google', [GoogleAuthController::class, 'redirectToGoogle'])->name('google.login');
 Route::get('/auth/google/callback', [GoogleAuthController::class, 'handleGoogleCallback'])->name('google.auth');


/**
 * Without Google
 *
 */

    Route::get('/forget-password', [ForgotPasswordController::class ,'ForgotPasswordView'])->name('forget-password');
    Route::get('/reset-password',[ResetPasswordController::class ,'ResetPasswordView'])->name('Reset.password.view');
    Route::get('/Login',[LoginController::class,'loginview'])->name('view.login');
    Route::get('/Register',[RegisterController::class,'RegisterView'])->name('view.register');
    
    Route::prefix('auth')->group(function (){
        Route::post('/login/process',[LoginController::class,'Login'])->name('auth.login');
        Route::post('/Register/Process',[RegisterController::class,'Register'])->name('auth.register');
        Route::post('/logout',[LogoutController::class,'logout'])->name('auth.logout');

    });
