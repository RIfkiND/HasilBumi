<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Laravel\Cashier\Cashier;
use Stripe\Stripe;
use Stripe\Checkout\Session as StripeSession;
class PaymentController extends Controller
{
    public function checkout(Request $request, Cart $cart)
    {
        $order = Order::create([
            'cart_id' => $cart->id,
            'price_ids' => [$cart->product->price],
            'status' => 'incomplete',
        ]);

        return $request->user()->checkout($order->price_ids, [
            'success_url' => route('checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
            'metadata' => ['order_id' => $order->id],
        ]);
    }
        public function processCheckout(Request $request)
    {
        $user = $request->user();
        $cartItems = Cart::where('user_id', $user->id)->with('product')->get();

        $totalPrice = $cartItems->reduce(function ($total, $cartItem) {
            return $total + ($cartItem->product->price * $cartItem->quantity);
        }, 0);

        $order = Order::create([
            'user_id' => $user->id,
            'total_price' => $totalPrice,
            'status' => 'incomplete',
        ]);

        foreach ($cartItems as $cartItem) {
            $order->orderItems()->create([
                'product_id' => $cartItem->product_id,
                'quantity' => $cartItem->quantity,
                'price' => $cartItem->product->price,
            ]);
        }

        $cartItems->each->delete();

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $lineItems = $cartItems->map(function ($cartItem) {
            return [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $cartItem->product->name,
                    ],
                    'unit_amount' => $cartItem->product->price * 100,
                ],
                'quantity' => $cartItem->quantity,
            ];
        });

        $session = StripeSession::create([
            'payment_method_types' => ['card'],
            'line_items' => $lineItems->toArray(),
            'mode' => 'payment',
            'success_url' => route('checkout-success') . '?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => route('checkout-cancel'),
            'metadata' => [
                'order_id' => $order->id,
            ],
        ]);

        return response()->json(['id' => $session->id]);
    }

    public function handle(Request $request)
    {
        $sessionId = $request->get('session_id');

        if ($sessionId === null) {
            abort(404);
        }

        $session = Cashier::stripe()->checkout->sessions->retrieve($sessionId);

        if ($session->payment_status !== 'paid') {
            abort(404);
        }

        $orderId = $session['metadata']['order_id'] ?? null;

        if (!$orderId) {
            abort(404);
        }

        $order = Order::findOrFail($orderId);

        $order->update(['status' => 'completed']);

        // return Inertia::render('CheckoutSuccess', ['order' => $order]);
    }
}

