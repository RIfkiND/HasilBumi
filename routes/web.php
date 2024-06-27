<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChatController;
use App\Models\User;
use App\Http\Controllers\Seller\Auth\PendaftaranSellerController;
Route::get('/testing', function () {
    return Inertia::render('Shop/Checkout/Chekout');
});



Route::get('/dashboard', function () {
    $users = User::all();
   return Inertia::render('Dashboard', compact('users'));
})->middleware(['auth', 'verified'])->name('dashboard');





require __DIR__.'/Pages/Admin.php';

require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Pages/User.php';

require __DIR__.'/Auth/callback.php';

require __DIR__ . '/Api/Chat.php';
require __DIR__ . '/Api/GateWay.php';


