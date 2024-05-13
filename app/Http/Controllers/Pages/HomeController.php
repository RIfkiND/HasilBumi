<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Whistlist;

class HomeController extends Controller
{
    public function Home()
    {
        $authenticated = Auth::check();

        $carts = Cart::with('user')->get();
        $whistlist = Whistlist::with('user')->get();


        return Inertia::render('Home', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null,
            'cart' => $carts,
            'whistlist' => $whistlist,
        ]);
    }
    public function Whistlist()
    {
        $authenticated = Auth::check();
        $user = auth()->user();
        $Whistlist = Whistlist::where('user_id', $user->id)->with('product')->get();
        return Inertia::render('User/Layout/Component/Wislisht', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null,
            'whistList' => $Whistlist,
        ]);
    }
    public function ShopCart()
    {
        $authenticated = Auth::check();
        $user = auth()->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();
        return Inertia::render('User/Layout/Component/shop_card', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null,
            'cartItems' => $cartItems,
        ]);
    }

    public function Shop()
    {
        $products = Product::all();

        return Inertia::render('Shop/shop', [
            'products ' => $products,
        ]);
    }

    public function chat()
    {
        return Inertia::render('Coba/Chat/Chat');
    }
}
