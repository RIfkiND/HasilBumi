<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\Api\GlobalChatController;
Route::middleware('auth')->group(function () {
    Route::group(['prefix' => 'chat', 'as' => 'chat.'], function() {
        Route::get('/{receiverId?}', [ChatController::class, 'index'])->name('index');
        Route::post('prosess/{receiverId?}', [ChatController::class, 'store'])->name('store');
    });
    Route::group(['prefix' => 'chat', 'as' => 'box.'], function() {
        Route::get('/chat/messages/{receiverId}', [GlobalChatController::class, 'fetchMessages'])->name('index');
        Route::post('/chat/store/{receiverId}', [GlobalChatController::class, 'store'])->name('store');
    });
 });

 
