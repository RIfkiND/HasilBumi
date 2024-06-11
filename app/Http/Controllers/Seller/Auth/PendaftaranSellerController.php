<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use App\Models\Seller_Information;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Inertia\Inertia;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class PendaftaranSellerController extends Controller
{

    public function PendaftaranForm()
    {
        return inertia('Seller/Auth/PendaftaranSeller');
    }

    public function Pendaftaran(Request $request)
    {

        Log::info('User authenticated: ' . (Auth::check() ? 'Yes' : 'No'));
        // Ensure the user is authenticated
        $user = Auth::user();

        if (!$user) {
            return redirect()->back()->withErrors(['error' => 'User is not authenticated.']);
        }

        // Validate the request data
        $validatedData = $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nama_toko' => 'required|string|max:255',
            'no_telp_toko' => 'required|string|max:20', // Adjusted to string
            'kota' => 'required|string|max:255',
            'provinsi' => 'required|string|max:255',
            'kode_pos' => 'required|integer',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'foto_sendiri' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $validatedData['user_id'] = $user->id;


        $validatedData['foto_ktp'] = $this->storeImage($request, 'foto_ktp', 'toko/foto_ktp');
        $validatedData['foto_sendiri'] = $this->storeImage($request, 'foto_sendiri', 'toko/foto_sendiri');

        Seller_Information::create($validatedData);



        return redirect('/UserProfile')->with(['success' => 'Seller information saved successfully']);
    }

    private function storeImage(Request $request, $fieldName, $storagePath)
    {
        if ($request->hasFile($fieldName)) {
            $image = $request->file($fieldName);
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs($storagePath, $fileName);
            return Storage::url($imagePath);
        }

        return null;
    }

}
