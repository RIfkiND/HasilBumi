<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/testing', function () {
    return Inertia::render('Shop/MainShop');
});

Route::get('/coment', function () {
    return Inertia::render('Shop/Layout/Comment');
});



require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Auth/callback.php';

require __DIR__ . '/Auth/Seller.php';

require __DIR__ . '/Api/Chat.php';



