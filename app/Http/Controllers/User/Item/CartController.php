<?php

namespace App\Http\Controllers\User\Item;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use App\Helper\CartItem;
class CartController extends Controller
{

    public function view(Request $request, Product $product)
    {
        $user = $request->user();
        $cartItems = [];

        if ($user) {
            $cartItems = Cart::where('user_id', $user->id)->with(['product.first_image'])->get();
        } else {
            $cartItems = Cart::getCookieCartItems();

            if (count($cartItems) > 0) {
                $cartItems = Cart::getProductsAndCartItems();
                $products = $cartItems[0]->load('first_image');
                $cartItems = $cartItems[1];
            }
        }

        if (count($cartItems) > 0) {
            $products = $user ? $cartItems->pluck('product') : $products;
            $total = $products->reduce(function ($carry, $product) use ($cartItems) {
                return $carry + $product->price * ($cartItems[$product->id]['quantity'] ?? 0);
            }, 0);

            $response = [
                'count' => count($cartItems),
                'total' => $total,
                'items' => $cartItems,
                'products' => $products,
            ];

            return Inertia::render('User/Layout/Component/shop_card', ['cartItems' => $response]);
        } else {
            return redirect()->back();
        }
    }



    public function store(Request $request, Product $product)
    {

        $quantity = $request->post('quantity', 1);
        $user = $request->user();

        if ($user) {
            $cartItem = Cart::where(['user_id' => $user->id, 'product_id' => $product->id])->first();
            if ($cartItem) {
                $cartItem->increment('quantity');
            } else {
                Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $product->id,
                    'quantity' => 1,
                ]);
            }
        } else {
            $cartItems = Cart::getCookieCartItems();
            $isProductExists = false;
            foreach ($cartItems as $item) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity'] += $quantity;
                    $isProductExists = true;
                    break;
                }
            }

            if (!$isProductExists) {
                $cartItems[] = [
                    'user_id' => null,
                    'product_id' => $product->id,
                    'quantity' => $quantity,
                    'price' => $product->price,
                ];
            }
            Cart::setCookieCartItems($cartItems);
        }

        return redirect()->back()->with('success', 'cart added successfully');
    }


    public function update(Request $request, Product $product)
    {
        $quantity = $request->integer('quantity');
        $user = $request->user();
        if ($user) {
            Cart::where(['user_id' => $user->id, 'product_id' => $product->id])->update(['quantity' => $quantity]);
        } else {
            $cartItems = Cart::getCookieCartItems();
            foreach ($cartItems as &$item) {
                if ($item['product_id'] === $product->id) {
                    $item['quantity'] = $quantity;
                    break;
                }
            }
            Cart::setCookieCartItems($cartItems);
        }

        return redirect()->back();
    }

    public function delete(Request $request, Product $product)
    {
        $user = $request->user();
        if ($user) {
            Cart::query()->where(['user_id' => $user->id, 'product_id' => $product->id])->first()?->delete();
            if (Cart::count() <= 0) {
                return redirect()->route('home')->with('info', 'your cart is empty');
            } else {
                return redirect()->back()->with('success', 'item removed successfully');
            }
        } else {
            $cartItems = Cart::getCookieCartItems();
            foreach ($cartItems as $i => &$item) {
                if ($item['product_id'] === $product->id) {
                    array_splice($cartItems, $i, 1);
                    break;
                }
            }
            Cart::setCookieCartItems($cartItems);
            if (count($cartItems) <= 0) {
                return redirect()->back()->with('success', 'your cart is empty');
            } else {
                return redirect()->back()->with('success', 'item removed successfully');
            }
        }
    }
}
