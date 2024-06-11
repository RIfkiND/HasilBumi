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
  

        return Inertia::render('Home', [

        ]);
    }
    public function Whistlist()
    {

        return Inertia::render('User/Layout/Component/Wislisht', [

        ]);
    }
    public function ShopCart()
    {

        return Inertia::render('User/Layout/Component/shop_card', [
           
        ]);
    }

    public function Shop()
    {
        $products = Product::all();

        return Inertia::render('User/Layout/Shop/Shop', [
            'products ' => $products,
        ]);
    }

    public function Checkout()
    {
        $products = Product::all();

        return Inertia::render('Shop/Checkout/Chekout', [
            'products ' => $products,
        ]);
    }

    public function ShowProduct()
    {
        return Inertia::render('Shop/Product');
    }


    public function Skeleton(){
        return Inertia::render('Skeleton/Layouts/Card');
    }

}
