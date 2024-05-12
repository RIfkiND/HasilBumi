<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;



Route::get('/messages', [MessageController::class, 'messages'])->name('messages');
Route::post('/messages', [MessageController::class, 'messageStore'])->name('messageStore');