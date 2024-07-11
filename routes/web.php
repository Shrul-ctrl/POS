<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\pembayaranController;
use App\Http\Controllers\RekapanController;
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

Route::group(['prefix' => 'admin', 'middleware' => ['auth', IsAdmin::class]], function () {
    Route::get('', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategori', KategoriController::class);
    Route::resource('menu', menuController::class);
    Route::resource('pembayaran', pembayaranController::class);
    Route::resource('user', UserController::class);
});

Route::group(['prefix' => 'kasir', 'middleware' => ['auth']], function () {
    Route::get('', [KasirController::class, 'menampilkan'])->name('kasir');
    Route::get('rekapan', [RekapanController::class, 'index'])->name('rekapan');
    Route::get('cetak-rekapan', [RekapanController::class, 'cetakRekapan'])->name('cetak-rekapan');
    Route::get('bayar', [KasirController::class, 'bayar'])->name('bayar');
    Route::get('filter', [RekapanController::class,'filter'])->name('filter');

});

Auth::routes();
Route::get('auth/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('auth.home')->middleware('isAdmin');
Route::get('user/home', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');



Route::get('/', function () {

})->middleware('auth');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
