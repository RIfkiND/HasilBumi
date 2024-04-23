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


Route::get('/percobaan', function () {
    return Inertia::render('Coba/login');
});

Route::get('/admin', function(){
    return Inertia::render('Admin/Dashboard');
});

Route::get('/login', function(){
    return Inertia::render('User/Auth/Login');
})->name('login');

Route::get('/register', function(){
    return Inertia::render('User/Auth/Register');
})->name('register');

Route::get('/navbar', function(){
    return Inertia::render('Component/Navbar/Nav');
});

Route::get('/forget-password', function(){
    return Inertia::render('User/Auth/ForgetPassword');
})->name('forget-password');

Route::get('/reset-password', function(){
    return Inertia::render('User/Auth/ResetPassword');
});

Route::get('/daftar', function(){
    return Inertia::render('Seller/Testing/multiForm/PendaftaranSeller/Daftar');
});


require __DIR__.'/Pages/Main.php';

require __DIR__.'/Auth/callback.php';

require __DIR__.'/Api/Chat.php';

