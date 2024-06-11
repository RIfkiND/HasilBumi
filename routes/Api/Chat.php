<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
Route::middleware('auth')->group(function () {

    Route::group(['prefix' => 'chat', 'as' => 'chat.'], function() {
        Route::get('/{receiverId?}', [ChatController::class, 'index'])->name('index');
        Route::post('prosess/{receiverId?}', [ChatController::class, 'store'])->name('store');
    });
 });
