<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LogoutController extends Controller
{
/**
 * Log the user out of the application.
 */
public function logout(Request $request)
{


     $user = Auth::user();
     if ($user) {
         $user->update(['is_online' => false]);
     }

     Auth::logout();


     $request->session()->invalidate();


     $request->session()->regenerateToken();

    return $this->loggedOut($request) ?: to_route('Home')->with('success','You Have Logout');
}
}
