<?php
namespace App\Http\Controllers\User\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

class GoogleAuthController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        $googleUser = Socialite::driver('google')->user();
        $user = User::where('email', $googleUser->email)->first();

        if (!$user) {
            $user = User::firstOrCreate(
                ['email' => $googleUser->getEmail()],
                ['name' => $googleUser->getName()],
                ['email_verified_at' =>  now() ],
            );
        }

        Auth::login($user);

        return redirect('/')->with('status', ['type' => 'success', 'action' => 'You can exit', 'text' => 'You Logged in']);
        ;

    }
}
