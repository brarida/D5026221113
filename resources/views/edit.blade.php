<!DOCTYPE html>
@extends('master2')

@section('judul_halaman')

	<h3>Edit Data Pegawai</h3>

	<a href="/pegawai" class="btn btn-danger"> Kembali</a>

	<br/>
	<br/>
@endsection

@section('konten')
	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}

        <input type="hidden" name="id" value="{{ $p->pegawai_id }}">

        <div class = "input-group mb-3">
            <label for = "nama" class = "input-group-text">Nama</label>
            <input type="text" name="nama" required="required" class = "form-control" value="{{ $p->pegawai_nama }}">
        </div>

        <div class = "input-group mb-3">
            <label for = "jabatan" class = "input-group-text">Jabatan</label>
            <input type="text" name="jabatan" required="required" class = "form-control" value="{{ $p->pegawai_jabatan }}">
        </div>

        <div class = "input-group mb-3">
            <label for = "umur" class = "input-group-text">Umur</label>
            <input type="number" name="umur" required="required" class = "form-control" value="{{ $p->pegawai_umur }}">
        </div>

        <div class = "input-group mb-3">
            <label for = "umur" class = "input-group-text">Alamat</label>
            <textarea name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection

</body>
</html>
