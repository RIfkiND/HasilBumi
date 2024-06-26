<?php

use App\Http\Controllers\Seller\Auth\LoginSellerController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Seller\Auth\PendaftaranSellerController;
use App\Http\Controllers\Seller\PageSellerController;
use  App\Http\Controllers\Seller\Product\CreateProductController;
use App\Http\Controllers\Seller\Product\DeleteProductController;
use App\Http\Controllers\Seller\Product\EditProductController;


//get
Route::get('/Pendaftaran/form',[PendaftaranSellerController::class, 'PendaftaranForm'])->name('seller.form');
Route::get('/store/{nama_toko}',[PageSellerController::class, 'VisitStore'])->name('seller.store');
Route::middleware(['auth'])->group(function () {
    Route::post('/seller/pendaftaran/proses', [PendaftaranSellerController::class, 'Pendaftaran'])->name('pendaftaran.seller');
    Route::put('/seller/update/{id}',[PageSellerController::class,'update'])->name('seller.edit');
    Route::get('/seller/search/product',[PageSellerController::class , 'searchSellerProduct'])->name('product.search');
    Route::post('/seller/add/Product',[CreateProductController::class,'store'])->name('product.add');
    Route::put('/product/update/prosess/{id}',[EditProductController::class ,'UpdateProduct'])->name('product.update');
    Route::delete('/product/image/{id}',[DeleteProductController::class,'deleteImage'])->name('image.delete');
    Route::delete('/product/delete/{id}',[DeleteProductController::class,'destroy'])->name('product.delete');
});

