<?php

use App\Http\Controllers\User\Item\CartController;
use App\Http\Controllers\User\Settings\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\User\Settings\UserController;
use App\Http\Controllers\User\Item\WhistlistController;
use App\Http\Controllers\User\CommentControlller;


// User Profile
Route::get('/UserProfile', [UserController::class, 'UserProfile'])->name('userProfile')->middleware('auth');
Route::get('/UserProducts/product', [UserController::class, 'userProductsMain'])->name('userProducts');
Route::get('/userHistory', [UserController::class, 'UserHistory'])->name('userHistory')->middleware('auth');
Route::get('/UserOpen', [UserController::class, 'UserOpen'])->name('userStore')->middleware('auth');
// Route::get('/Pendaftaran', [UserController::class, 'Pendaftaran'])->name('userPendaftaran')->middleware('auth');
//update
Route::group(['prefix' => 'User'], function(){
    Route::put('/edit/{id}',[ProfileController::class,'update'])->name('user.edit');
    Route::put('/edit/seller/{id}',[ProfileController::class,'sellerUpdate'])->name('seller.edit');
});

//user whislist
Route::get('/Whislist',[WhistlistController::class ,'WhistList'])->name('Home.Whistlist')->middleware('auth');
Route::post('/wishlist', [ WhistlistController::class, 'store'])->name('wishlist.store');
Route::delete('/wishlist/{id}', [WhistlistController::class, 'destroy'])->name('wishlist.destroy');
//user cart
Route::get('/ShopCart/User',[CartController::class ,'view'])->name('Home.ShopCart')->middleware('auth');

Route::prefix('cart')->controller(CartController::class)->group(function () {
    Route::post('store/{product}','store')->name('cart.store');
    Route::put('update/{product}','update')->name('cart.update');
    Route::delete('delete/{product}','delete')->name('cart.delete');
});
//comment
Route::post('user/comment/product',[CommentControlller::class ,'store'])->name('user.comment');
