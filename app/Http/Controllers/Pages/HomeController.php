<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\satuan;
use App\Models\Seller_Information;
use App\Models\Whistlist;

class HomeController extends Controller
{
    public function Home()
    {


        return Inertia::render('Home', []);
    }

    public function Shop(Request $request)
    {
        $categoryIds = $request->input('categories', []);
        $satuanIds = $request->input('satuans', []);
        $priceRange = $request->input('prices', ['from' => 0, 'to' => 0]);

        $products = Product::with(['first_image', 'satuan', 'category' ,'seller'])
            ->filtered()
            ->get();

        $Categories = Category::withCount('products')->get();
        $Satuans = Satuan::all();


        return Inertia::render('User/Layout/Shop/Shop', [
            'products' => $products,
            'Categories' => $Categories,
            'Satuans' => $Satuans,
            'selectedCategories' => $categoryIds,
            'selectedSatuans' => $satuanIds,
            'selectedPrices' => $priceRange,
        ]);
    }


    public function ShowProduct($id)
    {

        $product = Product::with(['product_image', 'satuan', 'category', 'seller.user', 'seller'])
            ->findOrFail($id);

        $sellerIsOnline = $product->seller->user->is_online ?? false;

        $allProducts = Product::with(['first_image', 'satuan', 'category', 'seller.user', 'seller'])
        ->where('id', '!=', $id)
        ->get();

        return Inertia::render('Shop/Product', [
            'products' => $product,
            'allProducts'=>$allProducts,
            'sellerIsOnline' => $sellerIsOnline,
        ]);
    }

}
