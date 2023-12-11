<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function index2()
    {
    	// mengambil data dari table pegawai
    	// $pegawai = DB::table('pegawai')->get();

        $nilai = DB::table('nilaikuliah')->paginate(10);

    	// mengirim data pegawai ke view index
    	return view('soaltentangnilai.index2',['nilaikuliah' => $nilai]);
    }

    public function tambah2()
    {
	    // memanggil view tambah
	    return view('soaltentangnilai.tambah2');
    }

    public function store2(Request $request)
    {
	    // insert data ke table pegawai
	    DB::table('nilaikuliah')->insert([
	    	'NRP' => $request->nrp,
	    	'NilaiAngka' => $request->nilaiangka,
	    	'SKS' => $request->sks
	    ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/nilaikuliah');
    }

}
