<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
class HomeController extends Controller
{
    public function Home(){
        $authenticated = Auth::check();

        return Inertia::render('Home', [
            'authenticated' => $authenticated,
            'user' => $authenticated ? Auth::user() : null
        ]);
    }
    public function Whistlist(){
        return Inertia::render('User/Layout/Component/Wislisht');
    }
    public function ShopCart(){
        return Inertia::render('User/Layout/Component/shop_card');
    }

    public function Shop(){
        $products = Product::all();

        return Inertia::render('Shop/shop',[
            'products '=> $products,
        ]);
    }
}
