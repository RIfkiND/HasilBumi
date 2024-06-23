<?php

namespace App\Http\Controllers\User\Item;

use App\Http\Controllers\Controller;
use App\Models\Whistlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;
class WhistlistController extends Controller
{
    public function Whistlist()
    {
        $user = auth()->user();
        $whistlist = Whistlist::where('user_id', $user->id)->with(['product','product.first_image'])->get();

        return Inertia::render('User/Layout/Component/Wislisht', [
            'Whislist'=> $whistlist
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        $wishlist = Whistlist::create([
            'user_id' => Auth::id(),
            'product_id' => $request->product_id,
        ]);

        return redirect()->back()->with('success', 'Product added to wishlist');
    }
    public function destroy($id)
{
    $user = auth()->user();
    $wishlistItem = Whistlist::where('user_id', $user->id)->where('id', $id)->firstOrFail();
    $wishlistItem->delete();

    return redirect()->back()->with('success', 'Item removed from wishlist');
}
}
