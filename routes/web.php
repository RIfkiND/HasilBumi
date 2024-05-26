<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ChatController;
use App\Models\User;
Route::get('/testing', function () {
    return Inertia::render('Coba/APi/pendaftranform');
});



Route::get('/dashboard', function () {
    $users = User::all();
   return Inertia::render('Dashboard', compact('users'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
   Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
   Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
   Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

   Route::group(['prefix' => 'chat', 'as' => 'chat.'], function() {
       Route::get('/{receiverId?}', [ChatController::class, 'index'])->name('index');
       Route::post('prosess/{receiverId?}', [ChatController::class, 'store'])->name('store');
   });
});



require __DIR__.'/Pages/Main.php';

require __DIR__.'/Pages/Seller.php';

require __DIR__.'/Auth/callback.php';

require __DIR__ . '/Auth/Seller.php';

// require __DIR__ . '/Api/Chat.php';



