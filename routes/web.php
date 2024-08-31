<?php

use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\SuplierController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', ['title' => 'Aplikasi penjualan barang berbasis web dengan Framework Laravel']);
});

Route::get('home', function(){
    return view('home');
});

//Data Jenis Barang
Route::get('jenis', [JenisController::class, 'index'])->name('jenis.index');
Route::get('jenis/create', [JenisController::class, 'create'])->name('jenis.create');
Route::post('jenis', [JenisController::class, 'store'])->name('jenis.store'); 
Route::delete('jenis/{id_jenis}', [JenisController::class, 'destroy'])->name('jenis.destroy');
Route::get('jenis/show', [JenisController::class, 'show'])->name('jenis.show');
Route::get('jenis/{id_jenis}/edit', [JenisController::class, 'edit'])->name('jenis.edit');
Route::put('jenis/{id_jenis}', [JenisController::class, 'update'])->name('jenis.update');

//Data Suplier  
Route::get('suplier', [SuplierController::class, 'index'])->name('suplier.index');
Route::get('suplier/create', [SuplierController::class, 'create'])->name('suplier.create');
Route::post('suplier', [SuplierController::class, 'store'])->name('suplier.store'); 
Route::get('suplier/{id_suplier}/edit', [SuplierController::class, 'edit'])->name('suplier.edit');  
Route::put('suplier/{id_suplier}', [SuplierController::class, 'update'])->name('suplier.update');
Route::delete('suplier/{id_suplier}', [SuplierController::class, 'destroy'])->name('suplier.destroy');
Route::get('suplier/show', [SuplierController::class, 'show'])->name('suplier.show');

//Data Barang 
Route::get('barang', [BarangController::class, 'index'])->name('barang.index');
Route::get('barang/create', [BarangController::class, 'create'])->name('barang.create');
Route::post('barang', [BarangController::class, 'store'])->name('barang.store'); 
Route::delete('barang/{kode_barang}', [BarangController::class, 'destroy'])->name('barang.destroy');
Route::get('barang/show', [BarangController::class, 'show'])->name('barang.show');  
Route::get('barang/{kode_barang}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::put('barang/{kode_barang}', [BarangController::class, 'update'])->name('barang.update');

//Data Pembelian
Route::get('pembelian', [PembelianController::class, 'index'])->name('pembelian.index');
Route::get('pembelian/create', [PembelianController::class, 'create'])->name('pembelian.create');
Route::post('pembelian', [PembelianController::class, 'store'])->name('pembelian.store'); 
Route::delete('pembelian/{nofak_beli}', [PembelianController::class, 'destroy'])->name('pembelian.destroy');
Route::get('pembelian/show', [PembelianController::class, 'show'])->name('pembelian.show');  
Route::get('pembelian/{nofak_beli}/edit', [PembelianController::class, 'edit'])->name('pembelian.edit');
Route::put('pembelian/{nofak_beli}', [PembelianController::class, 'update'])->name('pembelian.update');

//Data Penjualan
Route::get('penjualan', [PenjualanController::class, 'index'])->name('penjualan.index');
Route::get('penjualan/create', [PenjualanController::class, 'create'])->name('penjualan.create');
Route::post('penjualan', [PenjualanController::class, 'store'])->name('penjualan.store'); 
Route::delete('penjualan/{nofak_jual}', [PenjualanController::class, 'destroy'])->name('penjualan.destroy');
Route::get('penjualan/show', [PenjualanController::class, 'show'])->name('penjualan.show');  
Route::get('penjualan/{nofak_jual}/edit', [PenjualanController::class, 'edit'])->name('penjualan.edit');
Route::put('penjualan/{nofak_jual}', [PenjualanController::class, 'update'])->name('penjualan.update');