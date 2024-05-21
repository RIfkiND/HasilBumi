<?php

namespace App\Http\Controllers\Seller\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class EditProductController extends Controller
{

    public function edit($id){
        $products = Product::findOrFail($id);
        return Inertia::render('');
    }


    /**
     * Update Logic
     *
     * @param Request $request
     * @param [type] $id
     *
     */
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'title' => 'required|min:1',
            'price' => 'required|integer|min:1',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string|min:1'
        ]);

        $validatedData['user_id'] = $user->id;

        $product = Product::findOrFail($id);
        $product->update($validatedData);



        return redirect()->route('dashboard')->with(['success'=> 'Product updated successfully']);
    }
}
