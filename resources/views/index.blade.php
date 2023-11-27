<!DOCTYPE html>
{{-- memakai template dari master2 --}}
@extends('master2')

@section('title', 'Database Pegawai')

@section('judul_halaman')
	<h2>Aufaa Hafizhah Brarida</h2>
	<h3>Data Pegawai</h3>

    <a class="btn btn-primary btn-sm" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br>
    <br>
@endsection

@section('konten')

    <p>Cari Nama Pegawai :</p>
    <form action="/pegawai/cari" method="GET">
        <input class="" type="text" name="cari" placeholder="Cari Nama Pegawai ..." value="{{ old('cari') }}">
        <input type="submit" value="CARI" class="btn btn-success btn-sm">
    </form>

    <br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">View</a>

				<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>

				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>

    {{-- ini buat geser2 pagination --}}
	{{ $pegawai->links() }}

@endsection

</body>
</html>
