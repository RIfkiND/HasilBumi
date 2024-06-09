<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class FilterPageController extends Controller
{

    public function filterByCategory($category)
    {
        $category = Category::with('products')->where('name', $category)->first();

        if (!$category) {

            return Redirect::back()->with('error', 'Category not found.');
        }

        return Inertia::render('Seller/Testing/Filter/FileterResult', [
            'category' => $category,
        ]);
    }

    // public function filterByStar(){

    // }

    public function filterByPrice(Request $request){

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');


        $products = Product::whereBetween('price', [$minPrice, $maxPrice])->get();


        return Inertia::render('Shop/Shop',[
            'products'=> $products,
        ]);
    }


    public function filterByNew(){
        $products = Product::latest();

        return Inertia::render('Shop/shop',[
            'terbaru'=>$products,
        ]);

    }

    Public function filterByOld(){
        $products = Product::oldest();

        return Inertia::render('Shop/shop',[
            'terlama'=> $products,
        ]);
    }

    public function filterBySatuan(Request $request){

        $satuan = $request->input('satuan');


        $products = Product::where('satuan', $satuan)->get();


        return Inertia::render('Shop/shop' ,[
            'products' => $products,
        ]);
    }
    


}
