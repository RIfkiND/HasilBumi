<?php
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Pages\HomeController;
use App\Http\Controllers\Pages\FilterPageController;





Route::get('/',[HomeController::class,'Home'])->name('Home');


//Shop

Route::get('/Shop-MainPage',[HomeController::class,'Shop'])->name('Shop.main');
//whislist and Cart
Route::get('/Whislist',[HomeController::class ,'WhistList'])->name('Home.Whistlist')->middleware('auth');
Route::get('/ShopCart',[HomeController::class ,'ShopCart'])->name('Home.ShopCart')->middleware('auth');
//chat
Route::get('/chat', [HomeController::class, 'chat'])->name('Home.chat');



//filter
Route::get('/Products/filter/category/{category}', [FilterPageController::class, 'filterByCategory'])->name('filter.category');
Route::get('/Products/filter/price', [FilterPageController::class, 'filterByPrice'])->name('filter.price');
Route::get('/Products/filter/new', [FilterPageController::class, 'filterByNew'])->name('filter.new');
Route::get('/Products/filter/old', [FilterPageController::class, 'filterByOld'])->name('filter.old');
Route::get('/Products/filter/satuan', [FilterPageController::class, 'filterBySatuan'])->name('filter.satuan');

