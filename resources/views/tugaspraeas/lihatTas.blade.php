<!DOCTYPE html>
@extends('tugaspraeas.masterTas')

@section('title', 'Lihat Data Tas')

@section('judul_halaman')
    @foreach ($tas as $t)
        {{ csrf_field() }}
        <h3>Lihat Data Tas {{ $t->tas_merk }}</h3>
    @endforeach

    <a href="/tas" class="btn btn-danger"> Kembali</a>

    <br>
    <br>
@endsection

@section('konten')
    <div class="card p-3">
        @foreach ($tas as $t)
            <form method="post" action="/tas/lihat">
                {{ csrf_field() }}

                <table class="table table-bordered table-striped">
                    <tr>
                        <td style="width:150px">Merk Tas</td>
                        <td>{{ $t->tas_merk }}</td>
                    </tr>
                    <tr>
                        <td>Stock Tas</td>
                        <td>{{ $t->tas_stock }}</td>
                    </tr>
                    <tr>
                        <td>Ketersediaan</td>
                        <td>
                            <p>
                                @if ($t->tas_tersedia === 'Y')
                                    Tersedia
                                @elseif ($t->tas_tersedia === 'N')
                                    Tidak Tersedia
                                @endif
                            </p>
                        </td>
                    </tr>
                </table>
            </form>
        @endforeach
    </div>
@endsection
