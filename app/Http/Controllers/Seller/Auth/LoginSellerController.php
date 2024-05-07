<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Http\Requests\Auth\LoginSellerRequest;
use App\Providers\RouteServiceProvider;
class LoginSellerController extends Controller
{
    public function loginForSeller(){
        return Inertia::render('Seller/Auth/Login');
    }

   public function login(LoginSellerRequest $request){
    $request->authenticate();

    $request->session()->regenerate();

    return redirect(RouteServiceProvider::Seller_Dashboard)->with('succes','You have Login Succes Fully');
   }
}
