<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PaymentController;

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/checkout', [PaymentController::class, 'checkout'])->name('checkout');
    Route::post('/checkout/process', [PaymentController::class, 'processCheckout'])->name('checkout.process');
});
