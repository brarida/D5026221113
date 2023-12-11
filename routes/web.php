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

//route CRUD Pegawai
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

//route CRUD tas (tugas Pra EAS)
// ini buat homenya
Route::get('/tas','App\Http\Controllers\TasController@index');
Route::get('/tas/tambah','App\Http\Controllers\TasController@tambah');
Route::post('/tas/store','App\Http\Controllers\TasController@store');
Route::get('/tas/edit/{id}','App\Http\Controllers\TasController@edit');
Route::get('/tas/lihat/{id}', 'App\Http\Controllers\TasController@lihat');
Route::post('/tas/update','App\Http\Controllers\TasController@update');
// untuk hapus
Route::get('/tas/hapus/{id}','App\Http\Controllers\TasController@hapus');
// untuk cari
Route::get('/tas/cari','App\Http\Controllers\TasController@cari');

//route CRUD soal EAS tahun lalu
Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiController@index2');
Route::get('/nilaikuliah/tambah2','App\Http\Controllers\NilaiController@tambah2');
Route::post('/nilaikuliah/store2','App\Http\Controllers\NilaiController@store2');

//route CRUD EAS
Route::get('/karyawan', 'App\Http\Controllers\EASController@index');
Route::get('/karyawan/tambah','App\Http\Controllers\EASController@tambah');
Route::post('/karyawan/store','App\Http\Controllers\EASController@store');
Route::get('/karyawan/hapus/{id}','App\Http\Controllers\EASController@hapus');
