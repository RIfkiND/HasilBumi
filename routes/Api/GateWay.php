<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\CheckoutController;


Route::prefix('checkout')->controller(CheckoutController::class)->group((function()  {
    Route::post('order','store')->name('checkout.store');
    Route::get('success','success')->name('checkout.success');
    Route::get('cancel','cancel')->name('checkout.cancel');
}));
