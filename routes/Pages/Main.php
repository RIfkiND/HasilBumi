<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\FilterPageController;



Route::get('/',[HomeController::class,'Home'])->name('Home');
Route::get('/products/filter/{category}', [FilterPageController::class, 'filterByCategory'])->name('products.filter');

//Shop

Route::get('/Shop-MainPage',[HomeController::class,'Shop'])->name('Shop.main');
//whislist and Cart
Route::get('/Whislist',[HomeController::class ,'WhistList'])->name('Home.Whistlist');
Route::get('/ShopCart',[HomeController::class ,'ShopCart'])->name('Home.ShopCart');


