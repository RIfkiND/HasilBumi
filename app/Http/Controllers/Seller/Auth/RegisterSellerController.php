<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
class RegisterSellerController extends Controller
{
    public function SellerRegister(){
        return Inertia::render('Seller/Auth/Register');
    }

    public function Register(Request $request){
        
    }
}
