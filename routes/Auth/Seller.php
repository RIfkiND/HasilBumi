<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\Auth\RegisterSellerController;

Route::get('/Register/Join/seller' , [RegisterSellerController::class ,'SellerRegister'])->name('view.Seller.Register');


Route::post('/Register/Join/first' , [RegisterSellerController::class ,'firstStep'])->name('auth.Seller.Register.first');


Route::post('/Register/Join/Process' , [RegisterSellerController::class ,'Register'])->name('auth.Seller.Register');



Route::get('test' , [RegisterSellerController::class ,'index'])->name('coba');
