<?php

use App\Http\Controllers\Seller\Auth\LoginSellerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Seller\Auth\PendaftaranSellerController;
use App\Http\Controllers\Seller\PageSellerController;
use  App\Http\Controllers\Seller\Product\CreateProductController;
use Illuminate\Routing\Router;

//get
Route::get('/Pendaftaran/form',[PendaftaranSellerController::class, 'PendaftaranForm'])->name('seller.form');

Route::middleware(['auth'])->group(function () {
    Route::post('/seller/pendaftaran/proses', [PendaftaranSellerController::class, 'Pendaftaran'])->name('pendaftaran.seller');
    Route::post('/seller/add/Product',[CreateProductController::class,'store'])->name('product.add');
    Route::put('/seller/update/{id}',[PageSellerController::class,'update'])->name('seller.edit');
});

