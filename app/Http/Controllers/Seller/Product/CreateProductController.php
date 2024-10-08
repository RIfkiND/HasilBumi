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
    
    public function ProductView()
    {
        $categories = Category::all();
        return Inertia::render('', compact('categories'));
    }

    public function store(Request $request)
    {
       
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|min:2',
            'price' => 'required|integer|min:1',
            'stock' => 'required|integer|min:1',
            'satuan_id'=> 'required|exists:satuans,id',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required|string|min:1',
        ]);
        $validatedData['seller__information_id']=$user->id;

        $newProduct = Product::create($validatedData);

        if ($request->hasFile('url')) {
            $productImages = $request->file('url');
            foreach ($productImages as $image) {
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move('product_images', $uniqueName);
                ImageProduct::create([
                    'product_id' => $newProduct->id,
                    'url' => 'product_images/' . $uniqueName,
                ]);
            }
        }
        return redirect()->route('userProducts')->with('success', 'You have added a new Product');
    }

}
