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

        <div class = "form-group">
            <label for = "nama" class = "col-sm-2 control-label">Nama</label>
            <div class = "col-sm-10">
                <input type="text" name="nama" required="required" class = "form-control" value="{{ $p->pegawai_nama }}">
            </div>
        </div>

        <div class = "form-group">
            <label for = "jabatan" class = "col-sm-2 control-label">Jabatan</label>
            <div class = "col-sm-10">
                <input type="text" name="jabatan" required="required" class = "form-control" value="{{ $p->pegawai_jabatan }}">
            </div>
        </div>

        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Umur</label>
            <div class = "col-sm-10">
                <input type="number" name="umur" required="required" class = "form-control" value="{{ $p->pegawai_umur }}">
            </div>
        </div>

        <div class = "form-group">
            <label for = "umur" class = "col-sm-2 control-label">Alamat</label>
            <div class = "col-sm-10">
                <textarea name="alamat" required="required" class="form-control">{{ $p->pegawai_alamat }}</textarea>
            </div>
        </div>

		<input type="submit" value="Simpan Data" class="btn btn-success">
	</form>
	@endforeach
@endsection

</body>
</html>
