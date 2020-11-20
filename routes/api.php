<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth:api')->group(function() {
    Route::get('products', function () {
        $prod_data = DB::table('products')->get();
        dd($prod_data);
        // return
    });

    Route::post('products', function (Request $request) {
        $data = array(
            'product_name' => $request->product_name,
            'product_detail' => $request->product_detail,
            'product_barcode' => $request->product_barcode,
            'product_qty' => $request->product_qty,
            'product_price' => $request->product_price,
            'product_image' => $request->product_image,
            'product_category' => $request->product_category,
            'product_status' => $request->product_status,
            'created_at' => NOW(),
        );
        $result =  DB::table('products')->insert($data);
        // $prod_data = DB::table('products')->get();

        return $result;
    });

});


