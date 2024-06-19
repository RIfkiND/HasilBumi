<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\satuan;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class FilterPageController extends Controller
{

    public function filterByCategory(Request $request, $category)
    {
        $category = Category::where('name', $category)->first();

        if (!$category) {
            return redirect()->back()->with('error', 'Category not found.');
        }

        $products = Product::with(['first_image', 'satuan', 'category','seller'])
            ->where('category_id', $category->id)
            ->get();
        $categoryIds = $request->input('categories', []);
        $satuanIds = $request->input('satuans', []);
        $priceRange = $request->input('prices', ['from' => 0, 'to' => 0]);

        $categories = Category::all();
        $satuans = satuan::all();

        return Inertia::render('User/Layout/Shop/Shop', [
            'products' => $products,
            'Categories' => $categories,
            'satuans' => $satuans,
            'selectedCategories' => $categoryIds,
            'selectedSatuans' => $satuanIds,
            'selectedPrices' => $priceRange,

        ]);
    }
    // public function filterByStar(){

    // }

    public function filterByPrice(Request $request)
    {

        $minPrice = $request->input('min_price');
        $maxPrice = $request->input('max_price');


        $products = Product::whereBetween('price', [$minPrice, $maxPrice])->get();


        return Inertia::render('Shop/Shop', [
            'products' => $products,
        ]);
    }


    public function filterByNew()
    {
        $products = Product::latest();

        return Inertia::render('Shop/shop', [
            'terbaru' => $products,
        ]);
    }

    public function filterByOld()
    {
        $products = Product::oldest();

        return Inertia::render('Shop/shop', [
            'terlama' => $products,
        ]);
    }

    public function filterBySatuan(Request $request)
    {

        $satuan = $request->input('satuan');


        $products = Product::where('satuan', $satuan)->get();


        return Inertia::render('Shop/shop', [
            'products' => $products,
        ]);
    }
}
