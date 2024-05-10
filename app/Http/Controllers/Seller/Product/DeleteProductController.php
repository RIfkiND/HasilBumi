<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DeleteProductController extends Controller
{
    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        foreach ($product->images as $image) {
            $imagePath = public_path('product_images') . '/' . $image->image;

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $image->delete();
        }

        
        $product->delete();

        return redirect()->route('dashboard')->with(['success'=>'Product deleted successfully']);
    }
}
