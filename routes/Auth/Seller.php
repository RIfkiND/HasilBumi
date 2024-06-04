<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\Auth\PendaftaranSellerController    ;



//get
Route::get('/Pendaftaran/form',[PendaftaranSellerController::class, 'PendaftaranForm'])->name('seller.form');

//Post
// Route::post('/seller/pendaftaran/proses', [PendaftaranSellerController::class, 'Pendaftaran'])->name('pendaftaran.seller');


