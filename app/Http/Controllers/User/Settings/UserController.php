<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\satuan;
use App\Models\Seller_Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;
class UserController extends Controller
{

    public function userProfile()
    {
        $user = Auth::user();
        return Inertia::render('User/Layout/Profile/userProfile',[
            'avatarUrl' => $user->avatar_user ? Storage::url($user->avatar_user) : null,
        ]);
    }
    public function userProductsMain()
    {

        $user = Auth::user();
        $sellerInfo = Seller_Information::where('user_id', $user->id)->first();

        $TotalProduct = $sellerInfo->totalProducts();
        if (!$sellerInfo) {
            return Inertia::render('User/Layout/Profile/UserProducts', [
                'products' => [],
                'Categories' => Category::all(),
                'Satuans'=> satuan::all(),
                'TotalProducts'=> $TotalProduct,
            ])->with('message', 'No seller information found for this user.');
        }

        $products = Product::with(['category','product_image' ,'satuan'])
        ->where('seller__information_id', $sellerInfo->id)
        ->paginate(10);

        return Inertia::render('User/Layout/Profile/userProducts', [
            'products' => $products,
            'Categories' => Category::all(),
            'Satuans'=> satuan::all(),
            'TotalProducts'=> $TotalProduct,
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
