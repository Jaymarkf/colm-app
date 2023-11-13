<?php

use App\Http\Controllers\AdminServer;
use App\Http\Controllers\EventController;
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

Route::get('/joenn-test', function () {
    return view('test');
});

// Route::get('/', [AdminServer::class, 'show']);
Route::get('/', function () {
    return view('front.homepage');
})->name('home.show');


Route::get('/school-profile', function () {
    return view('front.school-profile');
})->name('school-profile.show');
Route::get('/contact-us', function () {
    return view('front.contact-us');
})->name('contact-us.show');
Route::get('/virtual-tour', function () {
    return view('front.virtual-tour');
})->name('virtual-tour.show');

//ADMIN PART
Route::get('colm-admin', function () {
    session()->pull('login');
    return view('colm-admin');
});
Route::get('admin-dashboard', function () {
    return view('admin-dashboard');
})->middleware('auth_admin');

Route::get('manage_carousel', [AdminServer::class, 'show'])->middleware('auth_admin');

Route::post('admin', [AdminServer::class, 'edit'])->middleware('auth_admin');
Route::post('admin/delete', [AdminServer::class, 'delete'])->middleware('auth_admin');
//post mnethod
Route::any('add_new_carousel', [AdminServer::class, 'add']);

Route::any('login-colm-admin', [AdminServer::class, 'login'])->name('colm-admin');

Route::post('update_delete_carousel', [AdminServer::class, 'update'])->middleware('auth_admin');

Route::get('calendar-events', [EventController::class, 'index'])->name('events.index')->middleware('auth_admin');
Route::get('calendar-events/add', [EventController::class, 'add'])->name('events.add')->middleware('auth_admin');
Route::post('calendar-events/add', [EventController::class, 'store'])->name('events.store')->middleware('auth_admin');
Route::get('calendar-events/{eventId?}', [EventController::class, 'edit'])->name('events.edit')->middleware('auth_admin');
Route::put('calendar-events/{eventId?}', [EventController::class, 'update'])->name('events.update')->middleware('auth_admin');
Route::delete('calendar-events/{eventId?}', [EventController::class, 'destroy'])->name('events.destroy')->middleware('auth_admin');

Route::get('events/{mode?}/{date?}', [EventController::class, 'api_get'])->name('events.apiget');

//Joenn test
Route::get('joenn', function () {
    return view('front/homepage');
});
/*---------PROGRAMS-----*/

Route::get('pre-elementary', function () {
    return view('front.pre-elementary');
});
Route::get('elementary', function () {
    return view('front.elementary');
});
Route::get('junior-hs', function () {
    return view('front.junior-hs');
});
Route::get('shs', function () {
    return view('front.shs');
});
Route::get('college', function () {
    return view('front.college');
});
Route::get('tesda', function () {
    return view('front.tesda');
});
/*--------END OF PROGRAMS-------*/