<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\models\Category;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::all();

        if ($request->has('category')) {
            $selectedCategory = Category::findOrFail($request->category);
            $Products = $selectedCategory->products()->with('images')->latest()->paginate(5);
        } else {
            $Products = Product::with('images')->latest()->paginate(30);
            $selectedCategory = null;
        }


        // Pass cart information to the Blade view
        return Inertia::render('', compact('Products', 'categories', 'selectedCategory', 'cartItems', 'subtotal'));
    }
    /**
     * Show To Products show tih categories
     *
     * @param [type] $id
     *
     */
    public function Show($id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        $products->images;

        return Inertia::render('', compact('products', 'categories'));
    }
}
