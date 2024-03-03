<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Events\LocationEvents;
Route::post('/map', function (Request $request) {
    $lat = $request->input('lat');
    $long = $request->input('long');
    $location = ["lat"=>$lat, "long"=>$long];
    event(new LocationEvents($location));
    return response()->json(['status'=>'success', 'data'=>$location]);
});

