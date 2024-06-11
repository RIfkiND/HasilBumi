<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChatController;
use App\Models\User;
use App\Http\Controllers\Seller\Auth\PendaftaranSellerController;
Route::get('/testing', function () {
    return Inertia::render('Coba/ckeditor');
});






require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Pages/User.php';

require __DIR__.'/Auth/callback.php';


require __DIR__ . '/Api/Chat.php';



