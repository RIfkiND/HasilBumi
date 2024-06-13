<?php

use App\Http\Controllers\User\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\User\Settings\UserController;

// User Profile
Route::get('/UserProfile', [UserController::class, 'UserProfile'])->name('userProfile')->middleware('auth');
Route::get('/UserProducts/product', [UserController::class, 'userProductsMain'])->name('userProducts');
Route::get('/userHistory', [UserController::class, 'UserHistory'])->name('userHistory')->middleware('auth');
Route::get('/UserOpen', [UserController::class, 'UserOpen'])->name('userStore')->middleware('auth');
// Route::get('/Pendaftaran', [UserController::class, 'Pendaftaran'])->name('userPendaftaran')->middleware('auth');
//update
Route::group(['prefix' => 'User'], function(){
    Route::put('/edit/{id}',[ProfileController::class,'update'])->name('user.edit');
});
