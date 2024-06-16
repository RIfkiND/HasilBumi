<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use App\Models\imageProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
use Illuminate\Support\Str;

class EditProductController extends Controller
{


    /**
     * Update Logic
     *
     * @param Request $request
     * @param [type] $id
     *
     */
    public function UpdateProduct(Request $request, $id)
    {

    
        $user = Auth::user();

        $product = Product::where('id', $id)
            ->where('seller__information_id', $user->id)
            ->firstOrFail();

        $this->validate($request, [
            'name' => 'required|string|min:2',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id',
            'deskripsi' => 'required|string|min:1',
             'satuan' => 'required|string|min:1'
        ]);

      
        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->category_id = $request->category_id;
        $product->deskripsi = $request->deskripsi;
        $product->satuan = $request->satuan;

    
        $product->save();

        if ($request->hasFile('url')) {
            $productImages = $request->file('url');
            foreach ($productImages as $image) {
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move('product_images', $uniqueName);
                ImageProduct::create([
                    'product_id' => $product->id,
                    'url' => 'product_images/' . $uniqueName,
                ]);
            }
        }

        return redirect()->route('userProducts')->with('success', 'Product updated successfully');
    }
}
