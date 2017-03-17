<?php

use Illuminate\Http\Request;
use App\invalidesa;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/barri/{barri}', function(Request $request, $barri) {
	//echo $barri."\n";
	$pensionsbarri = invalidesa::select("dte","barris","quantitat")->where('barris','like',"%".$barri."%")->get();
	/*foreach( $preusbarri as $preu ) {
		echo $preu."\n";
	}*/
	//echo $preusbarri;
    return response()->json( $pensionsbarri );
});