<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\MessageController;

Route::get('/chat', [MessageController::class, 'index']);
Route::post('/broadcast', [MessageController::class, 'broadcast']);
Route::post('/recive', [MessageController::class, 'receive']);
