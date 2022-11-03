<?php

use App\Http\Controllers\AdminServer;
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

Route::get('/',[AdminServer::class,'manage_carousel']);

//ADMIN PART
Route::get('colm-admin',function(){
    session()->pull('login');
    return view('colm-admin');
});
Route::get('admin-dashboard',function(){
    return view('admin-dashboard');
})->middleware('auth_admin');

Route::get('manage_carousel',[AdminServer::class,'manage_carousel'])->middleware('auth_admin');

Route::post('admin',[AdminServer::class,'edit_carousel'])->middleware('auth_admin');
//post mnethod
Route::any('add_new_carousel',[AdminServer::class,'add_new_carousel']);

Route::any('login-colm-admin',[AdminServer::class,'login'])->name('colm-admin');

Route::post('update_delete_carousel',[AdminServer::class,'update_delete_carousel'])->middleware('auth_admin');