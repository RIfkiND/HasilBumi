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

    public function userHistory(){
        return Inertia::render('User/Layout/Profile/userHistory');
    }

    public function userOpen(){
        return Inertia::render('User/Layout/Profile/userOpen');
    }

    // public function Pendaftaran(){
    //     return Inertia::render('Seller/Auth/PendaftaranSeller');
    // }
}
