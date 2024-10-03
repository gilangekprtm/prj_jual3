<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SuplierController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Auth;

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

$user = Auth::user();

Auth::routes();

Route::get('/', function () {
    return view('welcome', ['title' => 'Aplikasi barang dengan Framework Laravel']);
});

Route::get('home', function(){
    $user = Auth::user();

    return view('home', compact('user'));
})->middleware('auth');


//Data Jenis Barang
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index')->middleware('auth');
Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create')->middleware('auth');
Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store')->middleware('auth'); 
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy')->middleware('auth');
Route::get('jenis/show', [JenisController::class, 'show'])->name('jenis.show')->middleware('auth');
Route::get('jenis/{id_jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit')->middleware('auth');
Route::put('jenis/{id_jenis}', [JenisController::class, 'update'])->name('jenis.update')->middleware('auth');

//Data Suplier  
Route::get('suplier', [SuplierController::class, 'index'])->name('suplier.index')->middleware('auth');
Route::get('suplier/create', [SuplierController::class, 'create'])->name('suplier.create')->middleware('auth');
Route::post('suplier', [SuplierController::class, 'store'])->name('suplier.store')->middleware('auth'); 
Route::get('suplier/{id_suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit')->middleware('auth');  
Route::put('suplier/{id_suplier}', [SuplierController::class, 'update'])->name('suplier.update')->middleware('auth');
Route::delete('suplier/{id_suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy')->middleware('auth');
Route::get('suplier/show', [SuplierController::class, 'show'])->name('suplier.show')->middleware('auth');

//Data Barang 
Route::get('barang', [BarangController::class, 'index'])->name('barang.index')->middleware('auth');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create')->middleware('auth');
Route::post('barang', [BarangController::class, 'store'])->name('barang.store')->middleware('auth'); 
Route::delete('barang/{kode_barang}', [BarangController::class, 'destroy'])->name('barang.destroy')->middleware('auth');
Route::get('barang/show', [BarangController::class, 'show'])->name('barang.show')->middleware('auth');  
Route::get('barang/{kode_barang}/edit', [BarangController::class, 'edit'])->name('barang.edit')->middleware('auth');
Route::put('barang/{kode_barang}', [BarangController::class, 'update'])->name('barang.update')->middleware('auth');

//Data Pembelian
Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian.index')->middleware('auth');
Route::get('pembelian/create', [PembelianController::class, 'create'])->name('pembelian.create')->middleware('auth');
Route::post('pembelian', [PembelianController::class, 'store'])->name('pembelian.store')->middleware('auth'); 
Route::delete('pembelian/{nofak_beli}', [PembelianController::class, 'destroy'])->name('pembelian.destroy')->middleware('auth');
Route::get('pembelian/show', [PembelianController::class, 'show'])->name('pembelian.show')->middleware('auth');  
Route::get('pembelian/{nofak_beli}/edit', [PembelianController::class, 'edit'])->name('pembelian.edit')->middleware('auth');
Route::put('pembelian/{nofak_beli}', [PembelianController::class, 'update'])->name('pembelian.update')->middleware('auth');

//Data Penjualan
Route::get('penjualan', [PenjualanController::class, 'index'])->name('penjualan.index')->middleware('auth');
Route::get('penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create')->middleware('auth');
Route::post('penjualan', [PenjualanController::class, 'store'])->name('penjualan.store')->middleware('auth'); 
Route::delete('penjualan/{nofak_jual}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy')->middleware('auth');
Route::get('penjualan/show', [PenjualanController::class, 'show'])->name('penjualan.show')->middleware('auth');  
Route::get('penjualan/{nofak_jual}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit')->middleware('auth');
Route::put('penjualan/{nofak_jual}', [PenjualanController::class, 'update'])->name('penjualan.update')->middleware('auth');

//pengguna
Route::get('pengguna', [PenggunaController::class, 'index'])->name('pengguna.index')->middleware('auth');  
Route::get('pengguna/create', [PenggunaController::class, 'create'])->name('pengguna.create')->middleware('auth');
Route::post('pengguna', [PenggunaController::class, 'store'])->name('pengguna.store')->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
