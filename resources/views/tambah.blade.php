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

        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
                <input type="text" name="nama" required="required" class = "form-control" placeholder = "Masukkan nama Anda">
            </div>
        </div>

        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
                <input type="text" name="jabatan" required="required" class = "form-control" placeholder = "Masukkan Jabatan Anda">
            </div>
        </div>

        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
                <input type="number" name="umur" required="required" class = "form-control" placeholder = "Masukkan umur Anda">
            </div>
        </div>

        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
                <textarea name="alamat" required="required" class="form-control"></textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
@endsection

</body>
</html>
