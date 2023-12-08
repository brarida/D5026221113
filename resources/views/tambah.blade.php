<!DOCTYPE html>
@extends('master2')

@section('judul_halaman')
	<h3>Tambah Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>
@endsection

@section('konten')
	<form action="/pegawai/store" method="post" class = "form-horizontal" role = "form">
		{{ csrf_field() }}

        <div class = "input-group mb-3">
            <label for = "nama" class="input-group-text">Nama</label>
            <input type="text" name="nama" required="required" class = "form-control" placeholder = "Masukkan nama Anda">
        </div>

        <div class = "input-group mb-3">
            <label for = "jabatan" class = "input-group-text">Jabatan</label>
            <input type="text" name="jabatan" required="required" class = "form-control" placeholder = "Masukkan Jabatan Anda">
        </div>

        <div class = "input-group mb-3">
            <label for = "umur" class = "input-group-text">Umur</label>
            <input type="number" name="umur" required="required" class = "form-control" placeholder = "Masukkan umur Anda">

        </div>

        <div class = "input-group mb-3">
            <label for = "umur" class = "input-group-text">Alamat</label>
            <textarea name="alamat" required="required" class="form-control"></textarea>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

</body>
</html>
