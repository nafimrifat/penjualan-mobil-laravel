<?php

use App\Http\Controllers\bayarController;
use App\Http\Controllers\belimobilController;
use App\Http\Controllers\JmobilController;
use App\Http\Controllers\pegawaiController;
use App\Http\Controllers\pembeliController;
use App\Http\Controllers\penjualanController;
use Illuminate\Support\Facades\Route;

// ============= Mobil Project===============
Route::get('/login', function () {
    return view('mobil.login');
});

Route::resource('mobil', JmobilController::class);
Route::resource('pegawai', pegawaiController::class);
Route::resource('pembeli', pembeliController::class);
Route::resource('penjualan', penjualanController::class);
Route::resource('bayar', bayarController::class);
Route::resource('pembelian', belimobilController::class);
 




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


