<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/testing', function () {
    return Inertia::render('Seller/Testing/multiForm/index');
});


require __DIR__ . '/Pages/Main.php';

require __DIR__ . '/Pages/User.php';

require __DIR__ . '/Pages/Seller.php';

require __DIR__ . '/Auth/callback.php';

require __DIR__ . '/Auth/Seller.php';

require __DIR__ . '/Api/Chat.php';



