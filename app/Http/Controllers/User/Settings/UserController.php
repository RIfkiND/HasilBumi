<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
class UserController extends Controller
{
    public function userProfile(){
    
        return Inertia::render('User/Layout/Profile/userProfile');
    }
    public function userProducts(){
        return Inertia::render('User/Layout/Profile/userProducts');
    }
}
