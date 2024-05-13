<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/testing', function () {
    return Inertia::render('Coba/APi/pendaftranform');
});

Route::get('/coment', function () {
    return Inertia::render('Shop/MainShop');
});

Route::get('/skeleton', function () {
    return Inertia::render('Shop/Layout/Skeleton');
});


require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Auth/callback.php';

require __DIR__ . '/Auth/Seller.php';

require __DIR__ . '/Api/Chat.php';



