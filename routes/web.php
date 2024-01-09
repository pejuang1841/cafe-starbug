<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    MenuController,
    PegawaiController,
    PelangganController,
    PesananController
};

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
//form
Route::get('/form-menu', [MenuController::class, 'create']);
Route::get('/form-pegawai', [PegawaiController::class, 'create']);
Route::get('/form-pelanggan', [PelangganController::class, 'create']);
Route::get('/form-pesanan', [PesananController::class, 'create']);

//view
Route::get('/show-pesanan',[PesananController::class,'index']);
Route::get('/show-pegawai', [PegawaiController::class, 'index']);
Route::get('/show-menu', [MenuController::class, 'index']);
Route::get('/show-pelanggan', [PelangganController::class, 'index']);


//store
Route::post('store-menu', [MenuController::class, 'store']);
Route::post('store-pegawai', [MenuController::class, 'store']);
Route::post('store-pelanggan', [MenuController::class, 'store']);
Route::post('store-pesanan', [MenuController::class, 'store']);



