<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ChatsController;
Route::get('/chat', [ChatsController::class, 'index']);
Route::get('/messages', [ChatsController::class, 'fetchMessages']);
Route::post('/messages', [ChatsController::class, 'sendMessage']);
