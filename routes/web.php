<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/testing', function () {
    return Inertia::render('Coba/APi/Become_Seller');
});

Route::get('/daftar', function(){
    return Inertia::render('Seller/Auth/PendaftaranSeller');
})->name('sellerform');

require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Auth/callback.php';

require __DIR__ . '/Auth/Seller.php';

require __DIR__ . '/Api/Chat.php';



