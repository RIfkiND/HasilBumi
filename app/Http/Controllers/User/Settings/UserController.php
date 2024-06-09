<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class UserController extends Controller
{
    public function userProfile()
    {

        return Inertia::render('User/Layout/Profile/userProfile');
    }
    public function userProducts (Request $request)
    {
        $user = Auth::user();
        $products = Product::with(['category', 'image'])
            ->where('seller__information_id', $user->id)
            ->latest()
            ->paginate(10);
        $Categories = Category::get();

        return Inertia::render('User/Layout/Profile/userProducts', [
            'products' => $products,
            'Categories' => $Categories,
        ]);
    }
}