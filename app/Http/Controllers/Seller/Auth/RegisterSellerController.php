<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Seller;
use Inertia\Inertia;
class RegisterSellerController extends Controller
{


    public function Pendaftaran()
    {
        // Get the current step from the query parameters or default to Step1


        // Render the appropriate step view
        return Inertia::render('Seller/Auth/PendaftaranSeller');
    }




    // public function SellerRegister(){
    //     return Inertia::render('Seller/Auth/Register');
    // }


    // // public function firstStep(Request $request)
    // // {
    // //     $request->validate([
    // //         'name' => ['required'],
    // //         'email' => ['required'],
    // //     ]);
    // //     return to_route('Register.create');
    // // }

    // // public function Register(Request $request){

    // //     $validated = $request->validate([
    // //         'name' => ['required'],
    // //         'body' => ['required'],
    // //         'description' => ['required'],
    // //         'location' => ['required'],
    // //     ]);

    // //     Seller::create($validated);

    // //     return to_route('products.create');
    // // }
}
