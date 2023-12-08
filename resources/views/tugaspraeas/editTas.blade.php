<!DOCTYPE html>
@extends('tugaspraeas.masterTas')

@section('title', 'Edit Data Tas')

@section('judul_halaman')

    @foreach ($tas as $t)
        {{ csrf_field() }}
        <h3>Edit Data Tas {{ $t->tas_merk }}</h3>
    @endforeach

    <a href="/tas" class="btn btn-danger"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="card p-3 m-3">
        @foreach ($tas as $t)
            <form action="/tas/update" method="post">
                {{ csrf_field() }}

                <input type="hidden" name="id" value="{{ $t->tas_kode }}">

                <div class = "input-group mb-3">
                    <label for = "merk" class="input-group-text">Merk</label>
                    <input type="text" name="merk" required="required" class = "form-control"
                        value="{{ $t->tas_merk }}">
                </div>

                <div class = "input-group mb-3">
                    <label for = "stock" class = "input-group-text">Stock</label>
                    <input type="number" name="stock" required="required" class = "form-control"
                        value="{{ $t->tas_stock }}">
                </div>

                <div class="input-group mb-3">
                    <label class="input-group-text" for="inputGroupSelect">Ketersediaan</label>
                    <select class="custom-select" id="inputGroupSelect" name="tersedia" value="{{ $t->tas_tersedia }}">
                        <option value="Y">Tersedia</option>
                        <option value="N">Tidak Tersedia</option>
                    </select>
                </div>

                <input type="submit" value="Simpan Data" class="btn btn-success">
            </form>
        @endforeach
    </div>
@endsection
