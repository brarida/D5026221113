@extends('soaltentangnilai.master3')

@section('konten')
	
	<h3>Data Nilai</h3>

	<a href="/nilaikuliah" class="btn btn-primary"> Kembali</a>

	<br/>
	<br/>

	<form action="/nilaikuliah/store2" method="post">
		{{ csrf_field() }}
        <div class = "form-group">
            <label for = "nrp" class = "col-sm-2 control-label">NRP</label>
            <div class = "col-sm-8">
               <input name="nrp" type = "text" class = "form-control" id = "nrp" placeholder = "Masukkan NRP">
            </div>
         </div>

         <div class = "form-group">
            <label for = "nilaiangka" class = "col-sm-2 control-label">Nilai Angka</label>
            <div class = "col-sm-8">
               <input name="nilaiangka" type = "text" class = "form-control" id = "nilaiangka" placeholder = "Masukkan Nilai Angka">
            </div>
         </div>

         <div class = "form-group">
            <label for = "sks" class = "col-sm-2 control-label">SKS</label>
            <div class = "col-sm-8">
               <input name="sks" type = "number" class = "form-control" id = "sks" placeholder = "Masukkan SKS">
            </div>
         </div>

		<input type="submit" class="btn btn-success" value="Simpan Data">
	</form>
@endsection
