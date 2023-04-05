<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaControllerr;
use App\Http\Controllers\admincontroller;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/daftar_mahasiswa','App\Http\Controllers\MahasiswaControllerr@index');

// Route::get('/daftar_mahasiswa', [MahasiswaControllerr::class,'index']);

// // Route::post('/detail_mahasiswa', [MahasiswaControllerr::class, 'detail_mhs']);

// //Route::match(['get', 'post'], '/detail_mahasiswa', [MahasiswaControllerr::class, 'detail_mhs']);
 
// Route::view('/detail_mahasiswa', 'detail_mahasiswa');

Route::get('/admin/dashboard', [admincontroller::class, 'index']);

Route::get('/admin/postingan', [admincontroller::class, 'show_postingan']);

Route::get('/admin/arsip', [admincontroller::class, 'show_arsip']);

Route::get('/admin/aboutus', [admincontroller::class, 'show_aboutus']);

Route::get('/admin/tables', [admincontroller::class, 'show_tables']);

Route::get('/admin/loyalty', [admincontroller::class, 'show_loyalty']);

Route::get('/admin/produk', [admincontroller::class, 'show_produk']);

Route::get('/admin/contact', [admincontroller::class, 'show_contact']);