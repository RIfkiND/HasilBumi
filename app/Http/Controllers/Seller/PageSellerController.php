<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Seller_Information;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PageSellerController extends Controller
{

    public function update(Request $request, $id)
    {

        $user = Seller_Information::findOrFail($id);


        $this->validate($request,[
            'nama_toko' => 'string|min:5|max:50',
            'no_telp_toko' => 'string|min:1',
            'photo_toko' => 'image|mimes:png,jpg,jpeg|max:2048',

        ]);

        // Update profile fields if provided
        if ($request->has('nama_toko')) {
            $user->update([
                'nama_toko'=> $request->nama_toko
            ]);
        }


        if ($request->has('alamat')) {
            $user->update([
                'alamat'=> $request->alamat
            ]);
        }

        if ($request->has('no_telp_toko')) {
            $user->update([
                'no_hp'=> $request->no_hp
            ]);
        }


    if ($request->hasFile('photo_toko')) {
        $avatar = $request->file('photo_toko');
        $avatar->storeAs('toko/Avatar/', $avatar->hashName());
            Storage::delete('toko/Avatar/' . $user->photo_toko);
        $user->updateOrCreate([
            'photo_toko/'=>$avatar->hashName(),
        ]);

    }

        return redirect()->route('userProfile')->with('success', 'you have updated succeafully');
    }

    public function searchSellerProduct(Request $request){
        $user = Auth::user();
        $query =Product::with(['category', 'product_image','satuan'])
            ->where('seller__information_id', $user->id);
    
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        $sellerInfo = Seller_Information::where('user_id', $user->id)->first();
        $TotalProduct = $sellerInfo->totalProducts();

        $products = $query->latest()->paginate(10);
    
        $categories = Category::all();
    
        return Inertia::render('User/Layout/Profile/userProducts', [
            'products' => $products,
            'categories' => $categories,
            'search'=> $request->only('search'),
            'TotalProducts'=> $TotalProduct,
        ]);
        
}
}
