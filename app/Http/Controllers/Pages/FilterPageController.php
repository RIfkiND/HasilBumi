<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
class FilterPageController extends Controller{

    public function FilterLandingPage($category){
 
     $products = Product::where('category', $category)->get();

   
     return Inertia::render('', [
         'category' => $category,
         'products' => $products
     ]);
    }
}
