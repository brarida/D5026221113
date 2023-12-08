<!DOCTYPE html>
@extends('tugaspraeas.masterTas')

@section('title', 'Tambah Data Tas')

@section('judul_halaman')

    <h3>Tambah Data Tas</h3>

    <a class="btn btn-primary btn-sm" href="/tas/tambah"> + Tambah Tas</a>

    <br>
    <br>
@endsection

@section('konten')
    <div class="card p-3 m-3">
        <form action="/tas/store" method="post" class = "form-horizontal" role = "form" class="m-2">
            {{ csrf_field() }}

            <div class = "input-group mb-3">
                <label for = "merk" class="input-group-text">Merk</label>
                <input type="text" name="merk" required="required" class = "form-control"
                    placeholder = "Masukkan merk tas">
            </div>

            <div class = "input-group mb-3">
                <label for = "stock" class = "input-group-text">Stock</label>
                <input type="number" name="stock" required="required" class = "form-control"
                    placeholder = "Masukkan stock tas">

            </div>

            <div class="input-group mb-3">
                <label class="input-group-text" for="inputGroupSelect">Ketersediaan</label>
                <select class="custom-select" id="inputGroupSelect" name="tersedia">
                    <option value="Y">Tersedia</option>
                    <option value="N">Tidak Tersedia</option>
                </select>
            </div>
            <input type="submit" value="Simpan Data" class="btn btn-success">
        </form>
    </div>
@endsection
