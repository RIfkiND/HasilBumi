<?php

use App\Http\Controllers\Seller\Auth\LoginSellerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Seller\Auth\RegisterSellerController;

Route::get('/pendaftaran-seller', [RegisterSellerController::class , 'Pendaftaran'])->name('Seller.Pendaftaran');
Route::get('/login-seller', [LoginSellerController::class , 'sellerlogin'])->name('Seller.login');
