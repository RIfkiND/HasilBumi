<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Product;
use PhpParser\Node\Scalar\MagicConst\Function_;

class SeachController extends Controller
{
    public function SearchProduct(Request $request)
{
    $search = $request->search;

    $product = Product::whereAll(['name' ], "LIKE" , "%$search%" )
    ->orWhereHas('category', function($query) use ($search){
        $query->where('name','LIKE' , "%$search%");
    })->paginate(15);

    return Inertia::render('Shop/MainShop',[
        'search'=> $search,
        'product'=>$product,
    ]);
}


}
