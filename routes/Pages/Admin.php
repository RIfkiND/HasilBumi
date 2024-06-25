<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminLoginController;
use App\Http\Controllers\Admin\Auth\AdminLogoutController;
use App\Http\Controllers\Admin\PagesAdminController;

// Admin login routes
Route::get('admin/login', [AdminLoginController::class, 'login'])->name('admin.login');
Route::post('admin/login/proses', [AdminLoginController::class, 'authadmin'])->name('admin.auth');

// Admin logout route
Route::post('admin/logout', [AdminLogoutController::class, 'logout'])->name('admin.logout');


// Admin Dashboard
Route::get('Admin/Dashboard',[PagesAdminController::class , 'dashboard'])->name('admin.dashboard');