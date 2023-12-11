<!DOCTYPE html>
@extends('eas.masterK')

@section('title', 'Data Karyawan')

@section('judul_halaman')

    <h3>Data Karyawan</h3>

    <a class="btn btn-primary btn-sm" href="/karyawan/tambah"> + Tambah Karyawan</a>

    <br>
    <br>
@endsection

@section('konten')

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>Kode</th>
            <th>Nama Karyawan</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Opsi</th>
        </tr>
        @foreach ($karyawan as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ strtoupper($k->namalengkap) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ strtolower($k->departemen) }}</td>

                <td>
                    <a class="btn btn-danger btn-sm" href="/karyawan/hapus/{{ $k->kodepegawai }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
