<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Seller\Auth\RegisterSellerController;

Route::get('/Pendaftaran', [RegisterSellerController::class , 'Pendaftaran'])->name('Selller.Pendaftaran');
