<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ImageProduct;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Inertia\Inertia;

class CreateProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('Islogin');
    }

    public function ProductView()
    {
        $categories = Category::all();
        return Inertia::render('', compact('categories'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'user_id' => $user->id,
            'seller__information_id'=> $user->id,
            'name' => 'required|string|min:2',
            'price' => 'required|integer|min:1',
            'stock'=>'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required|string|min:1',
            'satuan'=>'required|string|min:1',
        ]);

        $newProduct = Product::create($validatedData);

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $imageName = $validatedData['title'] . '-image-' . time() . rand(1, 1000) . '.' . $image->extension();
                $image->move(public_path('product_images'), $imageName);
                ImageProduct::create([
                    'product_id' => $newProduct->id,
                    'url' => $imageName,
                ]);
            }
        }

        return redirect()->route('dashboard')->with('success', 'You have added a new Product');
    }
}
