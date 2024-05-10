<?php

namespace App\Http\Controllers\User\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{

    public function showCart()
    {
        $user = auth()->user();

        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        return view('components.Welcome.cart.cart', compact('cartItems'));
    }
    public function AddProductCart($id)
    {

        $user = auth()->user();
        $product = Product::findOrFail($id);


        $cart = Cart::updateOrCreate(
            ['user_id' => $user->id, 'product_id' => $product->id],
            ['quantity' => DB::raw('quantity + 1')]
        );

        return redirect()->route('cart.show')->with(['success'=> 'Item Added']);
    }

    public function deleteProduct(Request $request)
    {
        if ($request->id) {
            $cart = Cart::find($request->id);

            if ($cart) {
                $cart->delete();
                session()->flash('success', 'Item successfully deleted.');
            }
        }
    }
}
