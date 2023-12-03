<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stylecss', function () {
    return view('style');
});

Route::get('perkalian','App\Http\Controllers\DosenController@index');
Route::get('/showblog','App\Http\Controllers\DosenController@showBlog');

Route::get('/menambah/{nama}', 'App\Http\Controllers\DosenController@showNama');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

// route blog master
Route::get('/blog', 'App\Http\Controllers\BlogController@home');
Route::get('/blog/tentang', 'App\Http\Controllers\BlogController@tentang');
Route::get('/blog/kontak', 'App\Http\Controllers\BlogController@kontak');
Route::get('/blog/formulir', 'App\Http\Controllers\BlogController@formulir');

//route CRUD
// ini buat homenya
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::get('/pegawai/lihat/{id}', 'App\Http\Controllers\PegawaiController@lihat');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
// untuk hapus
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
// untuk cari
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
