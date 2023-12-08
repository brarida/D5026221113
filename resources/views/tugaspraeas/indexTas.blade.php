<!DOCTYPE html>
@extends('tugaspraeas.masterTas')

@section('title', 'Data Tas')

@section('judul_halaman')

    <h3>Data Tas</h3>

    <a class="btn btn-primary btn-sm" href="/tas/tambah"> + Tambah Tas</a>

    <br>
    <br>
@endsection

@section('konten')

    <table class="table table-striped table-hover text-center">
        <tr>
            <th>No</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Opsi</th>
        </tr>
        @foreach ($tas as $t)
            <tr>
                <td>{{ $t->tas_kode }}</td>
                <td>{{ $t->tas_merk }}</td>
                <td>{{ $t->tas_stock }}</td>
                <td
                    @if ($t->tas_tersedia === 'Y')
                    class="bg-success"

                    @elseif ($t->tas_tersedia === 'N')
                    class="bg-danger"
                    @endif>
                    <p>
                        @if ($t->tas_tersedia === 'Y')
                            Tersedia
                        @elseif ($t->tas_tersedia === 'N')
                            Tidak Tersedia
                        @endif
                    </p>
                </td>

                <td>
                    <a class="btn btn-success btn-sm" href="/tas/lihat/{{ $t->tas_kode }}">View</a>

                    <a class="btn btn-warning btn-sm" href="/tas/edit/{{ $t->tas_kode }}">Edit</a>

                    <a class="btn btn-danger btn-sm" href="/tas/hapus/{{ $t->tas_kode }}">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
