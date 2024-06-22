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

        return Inertia::render('User/Layout/Component/Wislisht', []);
    }
    public function ShopCart()
    {

        return Inertia::render('User/Layout/Component/shop_card', []);
    }

    public function Shop(Request $request)
{

    $search = $request->input('search');


    $categoryIds = $request->input('categories', []);
    $satuanIds = $request->input('satuans', []);
    $priceRange = $request->input('prices', ['from' => 0, 'to' => 0]);

    $query = Product::with(['first_image', 'satuan', 'category', 'seller']);


    if ($search) {
        $query->where('name', 'LIKE', "%$search%");
    }


            $categories = Category::all();
            $satuans = Satuan::all();
            $products = $query->get();

            return Inertia::render('User/Layout/Shop/Shop', [
                'products' => $products,
                'categories' => $categories,
                'satuans' => $satuans,
                'selectedCategories' => $categoryIds,
                'selectedSatuans' => $satuanIds,
                'selectedPrices' => $priceRange,
                'search' => $search,
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
