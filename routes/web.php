<?php

use App\Http\Controllers\AdminServer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
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
    $files = Storage::files('public/images/carousel/');
    $arr = array();
    foreach($files as $val){
        if(str_contains($val,'banner')){
            $arr[] = str_replace("public/images/carousel/","storage/images/carousel/",$val);
        }
    }
    return view('dashboard',['banner_images'=>$arr]);
});



//ADMIN PART
Route::get('colm-admin',function(){
    session()->pull('login');
    return view('colm-admin');
});
Route::get('admin-dashboard',function(){
    return view('admin-dashboard');
})->middleware('auth_admin');

Route::get('manage-carousel',function(){
    $files = Storage::files('public/images/carousel/');
    $arr = array();
    $data = array();
    foreach($files as $val){
    if(str_contains($val,'banner')){
            $arr[] = str_replace("public/images/carousel/","storage/images/carousel/",$val);
            $data[] =  str_replace("public/images/carousel/","banner-",$val);
        }
    }
    return view('admin-dashboard.pages.manage-carousel',['banner_images' => $arr,'banner_id' =>$data]);
})->middleware('auth_admin');
//post mnethod
Route::any('add_new_carousel',[AdminServer::class,'add_new_carousel']);
Route::any('login-colm-admin',[AdminServer::class,'login'])->name('colm-admin');
Route::post('update_delete_carousel',function(){
    dd('todo');
});