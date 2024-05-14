<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class HomeController extends Controller
{
    public function Home()
    {
        $authenticated = Auth::check();

        return Inertia::render('Home', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null
        ]);
    }
    public function Whistlist()
    {
        $authenticated = Auth::check();

        return Inertia::render('User/Layout/Component/Wislisht', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null
        ]);
    }
    public function ShopCart()
    {
        $authenticated = Auth::check();
        return Inertia::render('User/Layout/Component/shop_card', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null
        ]);
    }

    public function Shop()
    {
        $products = Product::all();

        return Inertia::render('User/Layout/Shop/Shop', [
            'products ' => $products,
        ]);
    }
    public function Product()
    {
        $products = Product::all();

        return Inertia::render('User/Layout/Shop/List_Product', [
            'products ' => $products,
        ]);
    }
}
