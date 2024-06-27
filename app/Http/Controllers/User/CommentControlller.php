<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ImageRating;
use App\Models\ProductRating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
class CommentControlller extends Controller
{


    public function store(Request $request){

        //  dd($request->all());
        $user = Auth::user();
        $validatedData = $request->validate([
            'product_id' => 'required|exists:products,id',
            'comments' => 'required|string|min:1',
            'star_rating' => 'required|integer|between:1,5',
        ]);
        $validatedData['user_id']=$user->id;
        $ratings = ProductRating::create($validatedData);

        if ($request->hasFile('url')) {
            $productImages = $request->file('url');
            foreach ($productImages as $image) {
                $uniqueName = time() . '-' . Str::random(10) . '.' . $image->getClientOriginalExtension();
                $image->move('comment', $uniqueName);
                ImageRating::create([
                    'product_rating_id' => $ratings->id,
                    'url' => 'comment/' . $uniqueName,
                ]);
            }
        }
        return redirect()->back()->with('success' ,'comment has been add');
    }
}
