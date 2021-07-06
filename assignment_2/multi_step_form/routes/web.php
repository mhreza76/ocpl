<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/preview',function(){
    return view('preview');
});

Route::post('/user_data',function(Illuminate\Http\Request $request){

    DB::table('test_app')->insert([
       'email' => $request->get('email'),
        'country' => $request->get('country'),
        'district' => $request->get('district'),
        'thana' => $request->get('thana'),
        'state' => $request->get('state'),
        'province' => $request->get('province'),
        'name' => $request->get('name'),
        'address' => $request->get('address'),
        'status' => $request->get('0'),
    ]);
    dd("Successfully Inserted");

});

