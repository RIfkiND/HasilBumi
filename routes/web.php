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
Route::get('/', function(){
    return Inertia::render('login-regis');
});

Route::get('home', function(){
    return Inertia::render('Home');
})->name('home');

Route::get('head', function(){
    return Inertia::render('heading');
})->name('head');

Route::get('dasboard', function(){
    return Inertia::render('User/Dashboard');
});
