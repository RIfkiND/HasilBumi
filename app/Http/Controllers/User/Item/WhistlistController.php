<?php

namespace App\Http\Controllers\User\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Whistlist;
use App\Models\Product;
use Inertia\Inertia;
class WhistlistController extends Controller
{
    
    public function AddWhistlist($id)
    {

        $user = auth()->user();
        $product = Product::findOrFail($id);


        $cart = Whistlist::updateOrCreate(
            ['user_id' => $user->id, 'product_id' => $product->id],
        );

        return redirect()->route('cart.show')->with(['success'=> 'Item Added']);
    }

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = Whistlist::find($request->id);

            if ($cart) {
                $cart->delete();
                session()->flash('success', 'Item successfully deleted.');
            }
        }
    }
}
