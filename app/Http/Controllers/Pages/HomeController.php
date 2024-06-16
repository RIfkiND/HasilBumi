<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\satuan;

class HomeController extends Controller
{
    public function Home()
    {
 

        return Inertia::render('Home', []);
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
        $products = Product::with(['product_image'])->get();
        $Categories = Category::all();
        $Satuans =  satuan::all();

        return Inertia::render('User/Layout/Shop/Shop', [
            'dataProducts' => $products,
            'Categories'=> $Categories,
            'Satuans' => $Satuans,
        ]);
    }

    public function ShowProduct()
    {
        return Inertia::render('Shop/Product');
    }



}
