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



Route::get('/Test',function(){
    return Inertia::render('User/Auth/Login');
});

require __DIR__.'/Pages/Page.php';

require __DIR__.'/Auth/callback.php';
Route::view('/','welcome');
