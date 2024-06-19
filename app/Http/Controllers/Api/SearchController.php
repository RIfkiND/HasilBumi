<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Product;
use App\Models\satuan;
use PhpParser\Node\Scalar\MagicConst\Function_;

class   SearchController extends Controller
{
    public function SearchProduct(Request $request)
    {
        $search = $request->input('search');
        $categoryIds = $request->input('categories', []);
        $satuanIds = $request->input('satuans', []);
        $priceRange = $request->input('prices', ['from' => 0, 'to' => 0]);

        $products = Product::with(['first_image', 'satuan', 'category', 'seller'])
            ->whereAll([
                'name',
            ], 'LIKE', "%$search%")
            ->get();

        $categories = Category::all();
        $satuans = Satuan::all();

        return Inertia::render('User/Layout/Shop/Shop', [
            'search' => $search,
            'products' => $products,
            'categories' => $categories,
            'satuans' => $satuans,
            'selectedCategories' => $categoryIds,
            'selectedSatuans' => $satuanIds,
            'selectedPrices' => $priceRange,
        ]);
    }
}
