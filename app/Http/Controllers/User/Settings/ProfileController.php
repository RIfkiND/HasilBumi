<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use App\Models\Seller_Information;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
    
            // dd($request->all());
        $user = User::findOrFail($id);

   
        $this->validate($request,[
            'name' => 'string|min:5|max:50',
            'tgl_lahir' => 'string|min:1', 
            'avatar_user' => 'image|mimes:png,jpg,jpeg|max:2048',
            'alamat' => 'string|min:1|max:255',
            'no_hp' => 'integer|min:9|max:13',
            'jenis_kelamin' => 'string|min:1',
        ]);

        // Update profile fields if provided
        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('tgl_lahir')) {
            $user->tgl_lahir = $request->tgl_lahir;
        }

        if ($request->has('alamat')) {
            $user->alamat = $request->alamat;
        }

        if ($request->has('no_hp')) {
            $user->no_hp = $request->no_hp;
        }

        if ($request->has('jenis_kelamin')) {
            $user->jenis_kelamin = $request->jenis_kelamin;
        }

        if ($request->hasFile('avatar_user')) {
            $avatar = $request->file('avatar_user');

            $filename = $user->id . '_' . $avatar->getClientOriginalName();
            $avatarPath = $avatar->storeAs('User/Avatar', $filename, 'public');
            
            if ($user->avatar_user) {
                Storage::disk('public')->delete('User/Avatar/' . $user->avatar_user);
            }
            $user->avatar_user = $filename;
        }

        // Save the user with the updated data
        $user->save();

        return redirect()->route('userProfile')->with('success', 'you have updated succeafully');
    }

    public function sellerUpdate(Request $request ,$id){
        $user = Seller_Information::findOrFail($id);

   
        $this->validate($request,[
            'nama_toko' => 'string|min:5|max:50',
            'provinsi' => 'string|min:1', 
            'avatar_user' => 'image|mimes:png,jpg,jpeg|max:2048',
            'kota' => 'string|min:1|max:255',
            'no_telp_toko' => 'integer|min:9|max:13',
            'jenis_kelamin' => 'string|min:1',
        ]);

        // Update profile fields if provided
        if ($request->has('nama_toko')) {
            $user->name = $request->name;
        }

        if ($request->has('provinsi')) {
            $user->provinsi = $request->provinsi;
        }

        if ($request->has('kota')) {
            $user->kota = $request->kota;
        }

        if ($request->has('no_telp_toko')) {
            $user->no_telp_toko = $request->no_telp_toko;
        }


        if ($request->hasFile('photo_toko')) {
            $avatar = $request->file('photo_toko');

            $filename = $user->id . '_' . $avatar->getClientOriginalName();
            $avatarPath = $avatar->storeAs('Toko/Avatar', $filename, 'public');
            
            if ($user->photo_toko) {
                Storage::disk('public')->delete('Toko/Avatar/' . $user->photo_toko);
            }
            $user->photo_toko = $filename;
        }

        // Save the user with the updated data
        $user->save();

        return redirect()->route('userProfile')->with('success', 'you have updated succeafully');
    }

}
