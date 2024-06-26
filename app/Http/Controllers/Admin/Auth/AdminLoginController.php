<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminAuth\AdminLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AdminLoginController extends Controller
{
    public function login()
    {
        return Inertia::render('Admin/Auth/Login');
    }

    public function authadmin(AdminLoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect(RouteServiceProvider::Admin_Dashboard)->with('success', 'You have Log in as Admin');;
    }
}
