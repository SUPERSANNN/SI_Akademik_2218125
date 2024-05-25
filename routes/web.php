<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LaptopController;
use App\Http\Controllers\PembelianController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\SupplierController;
use Illuminate\Support\Facades\Route;

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

//Route untuk ke menu halaman dashboard
//index merupakan function yang ada di dalam controller untuk menampilkan halaman dashboard
Route::get('/', [DashboardController::class,'index'])->name('home');

//Route untuk ke menu halaman data laptop
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data laptop
Route::get('/laptop', [LaptopController::class,'index'])->name('laptop');
//Route untuk ke menu halaman tambah data laptop
//crate merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data laptop
Route::get('/laptop-create', [LaptopController::class,'create'])->name('laptop-create');
//Routing post untuk melakukan action insert data laptop
Route::post('/laptop-entry', [LaptopController::class,'store'])->name('laptop-store');
//Routing post untuk melakukan action update data laptop
Route::post('/laptop-update/{id}', [LaptopController::class, 'update'])->name('laptop-update');
//Routing get juga dapat dilakukan untuk action delete
Route::get('/laptop-delete/{id}',[LaptopController::class, 'destroy'])->name('laptop-delete');
//untuk cetak pdf
Route::get('/report/laptop', [LaptopController::class,'cetak'])->name('report-laptop');

//Route untuk ke menu halaman data pembelian
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data pembelian
Route::get('/pembelian', [PembelianController::class,'index'])->name('pembelian');
//Route untuk ke menu halaman tambah data pembelian
//create merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data pembelian
Route::get('/pembelian-create', [PembelianController::class,'create'])->name('pembelian-create');
//Routing post untuk melakukan action insert data pembelian
Route::post('/pembelian-entry', [PembelianController::class,'store'])->name('pembelian-store');
//Routing post untuk melakukan action update data pembelian
Route::post('/pembelian-update/{id}', [PembelianController::class, 'update'])->name('pembelian-update');
//Routing get juga dapat dilakukan untuk action delete
Route::get('/pembelian-delete/{id}',[PembelianController::class, 'destroy'])->name('pembelian-delete');

//Route untuk ke menu halaman data penjualan
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data penjualan
Route::get('/penjualan', [PenjualanController::class,'index'])->name('penjualan');
//Route untuk ke menu halaman tambah data penjualan
//create merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data penjualan
Route::get('/penjualan-create', [PenjualanController::class,'create'])->name('penjualan-create');
//Routing post untuk melakukan action insert data penjualan
Route::post('/penjualan-entry', [PenjualanController::class,'store'])->name('penjualan-store');
//Routing post untuk melakukan action update data penjualan
Route::post('/penjualan-update/{id}', [PenjualanController::class, 'update'])->name('penjualan-update');
//Routing get juga dapat dilakukan untuk action delete
Route::get('/penjualan-delete/{id}',[PenjualanController::class, 'destroy'])->name('penjualan-delete');
//untuk cetak pdf
Route::get('/report/penjualan', [PenjualanController::class,'cetak'])->name('report-penjualan');

//Route untuk ke menu halaman data stok
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data stok
Route::get('/stok', [StokController::class,'index'])->name('stok');
//Route untuk ke menu halaman tambah data stok
//create merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data stok
Route::get('/stok-create', [StokController::class,'create'])->name('stok-create');
//Routing post untuk melakukan action insert data stok
Route::post('/stok-entry', [StokController::class,'store'])->name('stok-store');
//Routing post untuk melakukan action update data stok
Route::post('/stok-update/{id}', [StokController::class, 'update'])->name('stok-update');
//Routing get juga dapat dilakukan untuk action delete
Route::get('/stok-delete/{id}',[StokController::class, 'destroy'])->name('stok-delete');

//Route untuk ke menu halaman data supplier
//index merupakan function yang ada di dalam controller untuk menampilkan halaman data supplier
Route::get('/supplier', [SupplierController::class,'index'])->name('supplier');
//Route untuk ke menu halaman tambah data supplier
//create merupakan function yang ada di dalam controller untuk menampilkan halaman tambah data supplier
Route::get('/supplier-create', [SupplierController::class,'create'])->name('supplier-create');
//Routing post untuk melakukan action insert data supplier
Route::post('/supplier-entry', [SupplierController::class,'store'])->name('supplier-store');
//Routing post untuk melakukan action update data supplier
Route::post('/supplier-update/{id}', [SupplierController::class, 'update'])->name('supplier-update');
//Routing get juga dapat dilakukan untuk action delete
Route::get('/supplier-delete/{id}',[SupplierController::class, 'destroy'])->name('supplier-delete');


