<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seller_Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
class UserController extends Controller
{

    public function userProfile()
    {

        return Inertia::render('User/Layout/Profile/userProfile');
    }
    public function userProductsMain()
    {

        $user = Auth::user();
        $sellerInfo = Seller_Information::where('user_id', $user->id)->first();

        if (!$sellerInfo) {
            return Inertia::render('User/Layout/Profile/UserProducts', [
                'products' => [],
                'Categories' => Category::all(),
            ])->with('message', 'No seller information found for this user.');
        }

        $products = Product::with(['category'])
        ->where('seller__information_id', $sellerInfo->id)
        ->paginate(10);

        return Inertia::render('User/Layout/Profile/userProducts', [
            'products' => $products,
            'Categories' => Category::all(),
        ]);
    }

    public function userHistory(){
        return Inertia::render('User/Layout/Profile/userHistory');
    }

    public function userOpen(){
        return Inertia::render('User/Layout/Profile/userOpen');
    }

    // public function Pendaftaran(){
    //     return Inertia::render('Seller/Auth/PendaftaranSeller');
    // }
}
