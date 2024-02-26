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

// Route::get('/', function(){
//     return Inertia::render('Admin/Dashboard');
// });

Route::get('/dasboard', function(){
    return Inertia::render('User/Dashboard');
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

require __DIR__.'/Pages/Page.php';

require __DIR__.'/Auth/callback.php';
;
