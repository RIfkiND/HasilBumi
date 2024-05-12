<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get('/testing', function () {
    return Inertia::render('Coba/Chat/Chat');
});



require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Auth/callback.php';

require __DIR__ . '/Auth/Seller.php';

require __DIR__ . '/Api/Chat.php';



