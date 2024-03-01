<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
use App\Http\Requests\Auth\LoginRequest;

class LoginController extends Controller
{
    public function loginview(){
        return Inertia::render('User/Auth/Login');
    }

    public function Login(LoginRequest $request){
            $request->authenticate();

            $request->session()->regenerate();

            return redirect(RouteServiceProvider::HOME)->with('succes','You have Login Succes Fully');
    }

}
