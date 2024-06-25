<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLogoutController extends Controller
{
public function logout(Request $request){
    

    Auth::guard('admin')->logout();


    $request->session()->invalidate();


    $request->session()->regenerateToken();

   return $this->loggedOut($request) ?: to_route('Home')->with('success', 'You haveLogout');;
}
}
