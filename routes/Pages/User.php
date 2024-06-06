<?php

use App\Http\Controllers\User\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\User\Settings\UserController;

// User Profile
Route::get('/UserProfile', [UserController::class, 'UserProfile'])->name('userProfile')->middleware('auth');
Route::get('/UserProducts', [UserController::class, 'UserProducts'])->name('userProducts')->middleware('auth');
//update
Route::group(['prefix' => 'User'], function(){
    Route::put('/edit/{id}',[ProfileController::class,'update'])->name('user.edit');
});
