<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;

Route::get('/messages', [MessageController::class, 'index']);
Route::post('/send-message', [MessageController::class, 'sendMessage']);

