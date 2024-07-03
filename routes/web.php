<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin; 

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

Route::group(['prefix' => 'admin' , 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    
    Route::resource('kategori', KategoriController::class);

    Route::resource('menu', menuController::class);

    Route::resource('pembayaran', pembayaranController::class);


    Route::resource('user', UserController::class);
});

Route::get('/', function () {
    return view('layouts.backend');
})-> middleware('auth');

Auth::routes(
);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
