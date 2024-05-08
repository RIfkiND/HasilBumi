<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\Auth\PendaftaranSellerController;



//get
Route::get('/Pendaftaran/form',[PendaftaranSellerController::class, 'PendaftranForm'])->name('sellerform');

//Post
Route::post('/seller/pendaftaran', [PendaftaranSellerController::class, 'Pendaftaran'])->name('seller.pendaftaran');
Route::post('/Pendaftaran', [PendaftaranSellerController::class , 'MenjadiSeller'])->name('seller.becomeSeller');

