<?php

namespace App\Http\Controllers\User\Settings;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProfileController extends Controller
{
    public function update(Request $request, $id)
    {
        
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
            $user->update([
                'name'=> $request->name
            ]);
        }

        if ($request->has('tgl_lahir')) {
            $user->update([
                'tgl_lahir'=> $request->tgl_lahir
            ]);
        }

        if ($request->has('alamat')) {
            $user->update([
                'alamat'=> $request->alamat
            ]);
        }

        if ($request->has('no_hp')) {
            $user->update([
                'no_hp'=> $request->no_hp
            ]);
        }

        if ($request->has('jenis_kelamin')) {
            $user->update([
                'jenis_kelamin'=> $request->jenis_kelamin
            ]);
        }

    if ($request->hasFile('avatar_user')) {
        $avatar = $request->file('avatar_user');
        $avatar->storeAs('User/Avatar/', $avatar->hashName());
            Storage::delete('User/Avatar/' . $user->avatar_user);
        $user->updateOrCreate([
            'avatar_user'=>$avatar->hashName(),
        ]);

    }

        return redirect()->route('userProfile')->with('success', 'you have updated succeafully');
    }

}
