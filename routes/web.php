<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
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
    $files = Storage::files('public/images');
    $arr = array();
    foreach($files as $val){
        if(str_contains($val,'banner')){
            $arr[] = str_replace("public/images/","storage/images/",$val);
        }
    }
    return view('dashboard',['banner_images'=>$arr]);
});


Route::get('colm-admin',function(){
    return view('colm-admin');
});
