<!DOCTYPE html>
@extends('master2')

@section('judul_halaman')
    <h3>Lihat Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-danger"> Kembali</a>

    <br />
    <br />
@endsection

@section('konten')
    <div class="row">
        <div class="col">

        </div>

        <div class="col">
            @foreach ($pegawai as $p)
                <form method="post">
                    {{ csrf_field() }}

                    <table class="table table-bordered table-striped">
                        <tr>
                            <td style="width:150px">Nama</td>
                            <td>{{ $p->pegawai_nama }}</td>
                        </tr>
                        <tr>
                            <td>Jabatan</td>
                            <td>{{ $p->pegawai_jabatan }}</td>
                        </tr>
                        <tr>
                            <td>Umur</td>
                            <td>{{ $p->pegawai_umur }}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>{{ $p->pegawai_alamat }}</td>
                        </tr>
                    </table>
                </form>
            @endforeach
        </div>
    </div>
@endsection

</body>

</html>
