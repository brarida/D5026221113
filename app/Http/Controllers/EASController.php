<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EASController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
		$karyawan = DB::table('karyawan')->get();

    	// mengirim data pegawai ke view index
    	return view('eas.indexK',['karyawan' => $karyawan]);
    }

    // method untuk menampilkan view form tambah karyawan
    public function tambah()
    {
        // memanggil view tambah
        return view('eas.tambahK');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kodepegawai' => 'required|unique:karyawan,kodepegawai',
            'namalengkap' => 'required',
            'divisi' => 'required',
            'departemen' => 'required',
        ], [
            'kodepegawai.unique' => 'Kode Karyawan sudah ada dalam tabel. Harap pilih kode yang berbeda.',
        ]);

	    // insert data ke table pegawai
	    DB::table('karyawan')->insert([
		'kodepegawai' => $request->kodepegawai,
		'namalengkap' => $request->namalengkap,
		'divisi' => $request->divisi,
		'departemen' => $request->departemen
	    ]);

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');

    }

    // method untuk hapus data pegawai
    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('karyawan')->where('kodepegawai',$id)->delete();

        // alihkan halaman ke halaman pegawai
        return redirect('/karyawan');
    }

}
