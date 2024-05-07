<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class GoogleCallbackController extends Controller
{
    public function redirectToGoogle()
    {
        return Seller::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleSeller = Seller::driver('google')->seller();
        $seller = Seller::where('email', $googleSeller->email)->first();

        if (!$seller) {
            $seller = Seller::firstOrCreate(
                ['email' => $googleSeller->getEmail()],
                ['name' => $googleSeller->getName()],
                ['email_verified_at' =>  now() ],
            );
        }


        return redirect('/')->with('status', ['type' => 'success', 'title' => 'Login', 'text' => 'You Logged in']);

    }
}
