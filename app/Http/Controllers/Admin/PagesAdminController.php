<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Inertia\Inertia;
class PagesAdminController extends Controller
{
    public function dashboard(){
        $users = User::all();
        return Inertia::render('Admin/HomeView', compact('users'));
    }
}
