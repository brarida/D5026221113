@extends('soaltentangnilai.master3')
@section('title', 'Database Nilai')

@section('judul_halaman')

<h3>Data Nilai</h3>

<a href="/nilaikuliah/tambah2"> + Tambah Nilai Kuliah</a>

<br/>
<br/>
@endsection

@section('konten')
{{-- <p>Cari Data Nilai :</p>
	<form action="/nilai/cari" method="GET">
		<input class="form-control" name="cari" placeholder="Cari Nilai.." value="{{ old('cari') }}">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form> --}}
	<table class="table table-striped table-hover text-center">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai Angka</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $p)
		<tr>
			<td>{{ $p->ID }}</td>
			<td>{{ $p->NRP }}</td>
			<td>{{ $p->NilaiAngka }}</td>
			<td>{{ $p->SKS }}</td>
            <td>
                @if ($p->NilaiAngka <= 40)
                    D
                @elseif ($p->NilaiAngka >= 41 && $p->NilaiAngka <= 60)
                    C
                @elseif ($p->NilaiAngka >= 61 && $p->NilaiAngka <= 80)
                    B
                @else
                    A
                @endif
            </td>
            <td>
                {{$p->SKS * $p->NilaiAngka}}
            </td>
		</tr>
		@endforeach
	</table>
@endsection
