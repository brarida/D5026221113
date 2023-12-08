<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasController extends Controller
{
    public function index()
    {
    	// mengambil data dari table tas
    	$tas = DB::table('tas')->get();

    	// mengirim data tas ke view indexTas
    	return view('tugaspraeas.indexTas',['tas' => $tas]);
    }

    // method untuk menampilkan view form tambah pegawai
    public function tambah()
    {
        // memanggil view tambah
        return view('tugaspraeas.tambahTas');
    }

    public function store(Request $request)
    {
	    // insert data ke table tas
	    DB::table('tas')->insert([
		'tas_merk' => $request->merk,
		'tas_stock' => $request->stock,
		'tas_tersedia' => $request->tersedia
	    ]);

        // alihkan halaman ke halaman tas
        return redirect('/tas');
    }

    // method untuk edit data tas
    public function edit($id)
    {
        // mengambil data tas berdasarkan id yang dipilih
        $tas = DB::table('tas')->where('tas_kode',$id)->get();

        // passing data tas yang didapat ke view editTas
        return view('tugaspraeas.editTas',['tas' => $tas]);

    }

    // update data tas
    public function update(Request $request)
    {
        // update data tas
        DB::table('tas')->where('tas_kode',$request->id)->update([
		'tas_merk' => $request->merk,
		'tas_stock' => $request->stock,
		'tas_tersedia' => $request->tersedia
        ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/tas');
    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data tas berdasarkan id yang dipilih
        DB::table('tas')->where('tas_kode',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/tas');
    }

    public function lihat($id)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        $tas = DB::table('tas')->where('tas_kode', $id)->get();

        // passing data pegawai yang didapat ke view lihat.blade.php
        return view('tugaspraeas.lihatTas', ['tas' => $tas]);

    }
}
