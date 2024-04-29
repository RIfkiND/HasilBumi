<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class FilterPageController extends Controller
{

    public function filterByCategory($category)
    {
        $category = Category::with('products')->where('name', $category)->first();

        if (!$category) {

            return Redirect::back()->with('error', 'Category not found.');
        }

        return Inertia::render('Seller/Testing/Filter/FileterResult', [
            'category' => $category,
        ]);
    }
}
