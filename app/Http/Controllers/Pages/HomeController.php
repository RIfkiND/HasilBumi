<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function Home(){
        $authenticated = Auth::check();

        return Inertia::render('Home', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null
        ]);
    }
    

}
