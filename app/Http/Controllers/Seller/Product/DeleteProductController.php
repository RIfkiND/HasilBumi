<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use App\Models\imageProduct;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class DeleteProductController extends Controller
{


    public function deleteImage($id)
    {
        $image = imageProduct::where('id', $id)->delete();
        return redirect()->route('userProducts')->with('success', 'Image deleted successfully.');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);

        foreach ($product->product_image as $image) {
            $imagePath = public_path('product_images') . '/' . $image->image;

            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }

            $image->delete();
        }

        
        $product->delete();

        return redirect()->route('userProducts')->with(['success'=>'Product deleted successfully']);
    }
}
