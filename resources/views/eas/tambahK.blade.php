<!DOCTYPE html>
@extends('eas.masterK')

@section('title', 'Tambah Data Karyawan')

@section('judul_halaman')

    <h3>Tambah Data Karyawan</h3>

    <a href="/karyawan" class="btn btn-danger"> Kembali</a>

    <br>
    <br>
@endsection

@section('konten')

    <div class="card p-3 m-3">

        <form action="/karyawan/store" method="post" class = "form-horizontal" role = "form" class="m-2">
            {{-- Menampilkan pesan kesalahan validasi untuk kodepegawai --}}
            @if ($errors->has('kodepegawai'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{{ $errors->first('kodepegawai') }}</li>
                    </ul>
                </div>
            @endif

            {{ csrf_field() }}

            <div class = "input-group mb-3">
                <label for = "kodepegawai" class="control-label col-sm-2">Kode Karyawan</label>
                <input type="text" name="kodepegawai" required="required" class = "form-control col-sm-10"
                    placeholder = "Masukkan Kode Karyawan">
            </div>

            <div class = "input-group mb-3">
                <label for = "namalengkap" class = "control-label col-sm-2">Nama Karyawan</label>
                <input type="text" name="namalengkap" required="required" class = "form-control col-sm-10"
                    placeholder = "Masukkan Nama Lengkap Karyawan">

            </div>

            <div class = "input-group mb-3">
                <label for = "divisi" class = "control-label col-sm-2">Divisi</label>
                <input type="text" name="divisi" required="required" class = "form-control col-sm-10"
                    placeholder = "Masukkan Divisi Karyawan">

            </div>

            <div class = "input-group mb-3">
                <label for = "departemen" class = "control-label col-sm-2">Departemen</label>
                <input type="text" name="departemen" required="required" class = "form-control col-sm-10"
                    placeholder = "Masukkan Departemen Karyawan">

            </div>

            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    </div>
@endsection
