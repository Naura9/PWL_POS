<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Monolog\Level;

Route::get('/', [WelcomeController::class, 'index']);

Route::group(['prefix' => 'user'], function () {
    Route::get('/', [UserController::class, 'index']); // menampilkan halaman awal user
    Route::post('/list', [UserController::class, 'list']); // menampilkan data user dalam bentuk json untuk datatables
    Route::get('/create', [UserController::class, 'create']); // menampilkan halaman form tambah user
    Route::post('/', [UserController::class, 'store']); // menyimpan data user baru
    Route::get('/create_ajax', [UserController::class, 'create_ajax']); // menampilkan halaman form tambah user Ajax
    Route::post('/ajax', [UserController::class, 'store_ajax']); // menyimpan data user baru Ajax
    Route::get('/{id}', [UserController::class, 'show']); // menampilkan detail user
    Route::get('/{id}/edit', [UserController::class, 'edit']); // menampilkan detail user
    Route::get('/{id}', [UserController::class, 'update']); // menampilkan detail user
    Route::get('/{id}/edit_ajax', [UserController::class, 'edit_ajax']); // menampilkan halaman form edit user
    Route::put('/{id}/update_ajax', [UserController::class, 'update_ajax']); // menyimpan perubahan data user
    Route::get('/{id}/delete_ajax', [UserController::class, 'confirm_ajax']);   // untuk tampilkan form confirm delete user ajax
    Route::delete('/{id}/delete_ajax', [UserController::class, 'delete_ajax']);   // untuk haus data user ajax
    Route::delete('/{id}', [UserController::class, 'destroy']);// menghapus data user
});

Route::group(['prefix' => 'level'], function () {
    Route::get('/', [LevelController::class, 'index']); // menampilkan halaman awal Level
    Route::post('/list', [LevelController::class, 'list']); // menampilkan data Level dalam bentuk json untuk datatables
    Route::get('/create', [LevelController::class, 'create']); // menampilkan halaman form tambah Level
    Route::post('/', [LevelController::class, 'store']); // menyimpan data level baru
    Route::get('/create_ajax', [LevelController::class, 'create_ajax']); // menampilkan halaman form tambah level Ajax
    Route::post('/ajax', [LevelController::class, 'store_ajax']); // menyimpan data level baru Ajax
    Route::get('/{id}', [LevelController::class, 'show']); // menyimpan data Level baru
    Route::get('/{id}/edit', [LevelController::class, 'edit']); // menampilkan detail user
    Route::get('/{id}', [LevelController::class, 'update']); // menampilkan detail user
    Route::get('/{id}/edit_ajax', [LevelController::class, 'edit_ajax']); // menampilkan halaman form edit level
    Route::put('/{id}/update_ajax', [LevelController::class, 'update_ajax']); // menyimpan perubahan data level
    Route::get('/{id}/delete_ajax', [LevelController::class, 'confirm_ajax']);   // untuk tampilkan form confirm delete level ajax
    Route::delete('/{id}/delete_ajax', [LevelController::class, 'delete_ajax']);   // untuk haus data level ajax
    Route::delete('/{id}', [LevelController::class, 'destroy']);// menghapus data Level
});

Route::group(['prefix' => 'kategori'], function () {
    Route::get('/', [KategoriController::class, 'index']); // menampilkan halaman awal Kategori
    Route::post('/list', [KategoriController::class, 'list']); // menampilkan data Kategori dalam bentuk json untuk datatables
    Route::get('/create', [KategoriController::class, 'create']); // menampilkan halaman form tambah Kategori
    Route::post('/', [KategoriController::class, 'store']); // menyimpan data Kategori baru
    Route::get('/create_ajax', [KategoriController::class, 'create_ajax']); // menampilkan halaman form tambah kategori Ajax
    Route::post('/ajax', [KategoriController::class, 'store_ajax']); // menyimpan data kategori baru Ajax
    Route::get('/{id}', [KategoriController::class, 'show']); // menampilkan detail Kategori
    Route::get('/{id}/edit', [KategoriController::class, 'edit']); // menampilkan detail user
    Route::get('/{id}', [KategoriController::class, 'update']); // menampilkan detail user
    Route::get('/{id}/edit_ajax', [KategoriController::class, 'edit_ajax']); // menampilkan halaman form edit level
    Route::put('/{id}/update_ajax', [KategoriController::class, 'update_ajax']); // menyimpan perubahan data level
    Route::get('/{id}/delete_ajax', [KategoriController::class, 'confirm_ajax']);   // untuk tampilkan form confirm delete level ajax
    Route::delete('/{id}/delete_ajax', [KategoriController::class, 'delete_ajax']);   // untuk haus data level ajax
    Route::delete('/{id}', [KategoriController::class, 'destroy']);// menghapus data Kategori
});

Route::group(['prefix' => 'supplier'], function () {
    Route::get('/', [SupplierController::class, 'index']); // menampilkan halaman awal Supplier
    Route::post('/list', [SupplierController::class, 'list']); // menampilkan data Supplier dalam bentuk json untuk datatables
    Route::get('/create', [SupplierController::class, 'create']); // menampilkan halaman form tambah Supplier
    Route::post('/', [SupplierController::class, 'store']); // menyimpan data Supplier baru
    Route::get('/create_ajax', [SupplierController::class, 'create_ajax']); // menampilkan halaman form tambah kategori Ajax
    Route::post('/ajax', [SupplierController::class, 'store_ajax']); // menyimpan data kategori baru Ajax
    Route::get('/{id}', [SupplierController::class, 'show']); // menampilkan detail Kategori
    Route::get('/{id}/edit', [SupplierController::class, 'edit']); // menampilkan detail user
    Route::get('/{id}', [SupplierController::class, 'update']); // menampilkan detail user
    Route::get('/{id}/edit_ajax', [SupplierController::class, 'edit_ajax']); // menampilkan halaman form edit level
    Route::put('/{id}/update_ajax', [SupplierController::class, 'update_ajax']); // menyimpan perubahan data level
    Route::get('/{id}/delete_ajax', [SupplierController::class, 'confirm_ajax']);   // untuk tampilkan form confirm delete level ajax
    Route::delete('/{id}/delete_ajax', [SupplierController::class, 'delete_ajax']);   // untuk haus data level ajax
    Route::delete('/{id}', [SupplierController::class, 'destroy']);// menghapus data Supplier
});

Route::group(['prefix' => 'barang'], function () {
    Route::get('/', [BarangController::class, 'index']); // menampilkan halaman awal Barang
    Route::post('/list', [BarangController::class, 'list']); // menampilkan data Barang dalam bentuk json untuk datatables
    Route::get('/create', [BarangController::class, 'create']); // menampilkan halaman form tambah Barang
    Route::post('/', [BarangController::class, 'store']); // menyimpan data Barang baru
    Route::get('/create_ajax', [BarangController::class, 'create_ajax']); // menampilkan halaman form tambah kategori Ajax
    Route::post('/ajax', [BarangController::class, 'store_ajax']); // menyimpan data kategori baru Ajax
    Route::get('/{id}', [BarangController::class, 'show']); // menampilkan detail Kategori
    Route::get('/{id}/edit', [BarangController::class, 'edit']); // menampilkan detail user
    Route::get('/{id}', [BarangController::class, 'update']); // menampilkan detail user
    Route::get('/{id}/edit_ajax', [BarangController::class, 'edit_ajax']); // menampilkan halaman form edit level
    Route::put('/{id}/update_ajax', [BarangController::class, 'update_ajax']); // menyimpan perubahan data level
    Route::get('/{id}/delete_ajax', [BarangController::class, 'confirm_ajax']);   // untuk tampilkan form confirm delete level ajax
    Route::delete('/{id}/delete_ajax', [BarangController::class, 'delete_ajax']);   // untuk haus data level ajax
    Route::delete('/{id}', [BarangController::class, 'destroy']);// menghapus data Barang
    Route::get('/{id}/show_ajax', [BarangController::class, 'show_ajax']); // menampilkan detail barang ajax
});


