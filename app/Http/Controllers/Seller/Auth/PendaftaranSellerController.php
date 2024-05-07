<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
class PendaftaranSellerController extends Controller
{

    public function MenjadiSeller(Request $request)
    {
        $user = Auth::user();
        if ($user->isSeller()) {
            return Inertia::render('Coba/APi/Become_Seller')->with(['errors' ,'The user Has Become A seller']);
        }

        try {

            DB::beginTransaction();

            $seller = new Seller();
            $seller->user_id = $user->id;
            $seller->save();

            DB::commit();

            return Inertia::render('Coba/APi/pendaftranform')->with(['success' => 'User successfully became a seller']);
        } catch (\Exception $e) {
            DB::rollBack();

    }
}


    public function PendaftranForm()
    {

        $user = Auth::user();
        $seller = $user->seller()->first();
        $sellerInformation = $seller->sellerInformation()->first();

        return inertia('Seller/Auth/PendaftaranSeller', [
            'sellerInformation' => $sellerInformation,
        ]);
    }

    public function Pendaftaran(Request $request)
    {
        $user = Auth::user();
        $seller = $user->seller()->first();


        $validateData = $request->validate([
            'no_hp' => 'required|integer|min:1',
            'nama_toko'=>'required|string|min:5',
            'nip'=> 'required|integer|min:10',
            'kota'=> 'required|string|min:1',
            'provinsi'=> 'required|string|min:1',
            'foto_toko' =>'image|mimes:png,jpg.jpeg|max:2048'
        ]);

        $sellerInformation = $seller->sellerInformation()->firstOrNew([]);
        $sellerInformation->fill($request->only($validateData));

        if ($request->hasFile('foto_toko')) {
            $sellerInformation->foto_toko = $request->file('foto_toko')->store('seller_photos');
        }

        $sellerInformation->save();

        return redirect('/')->with(['success' => 'Seller information saved successfully']);
    }
}
