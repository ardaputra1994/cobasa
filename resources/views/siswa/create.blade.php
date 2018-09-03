@extends('template')

@section('main')
<div id="siswa">
	<h2>Tambah Siswa</h2>		
		{!! Form::open(['url' => 'siswa']) !!}
				@include('siswa.form', ['submitButtonText' => 'Tambah Siswa'])

		{!! Form::close() !!}
	
</div>

@stop

@section('footer')
	<div id="footer">
		<p>&copy: 2018 Laravel</p>
	</div>
	
@stop

<!-- <form action="{{ url('siswa') }}" method="POST">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group">
			<label for="nisn" class="control-label">NISN</label>
			<input name="nisn" id="nisn" type="text" class="form-control">
		</div>

		<div class="form-group">
			<label for="nama_siswa" class="control-label">Nama Siswa</label>
			<input type="text" name="nama_siswa" id="nama_siswa" class="form-control">
		</div>

		<div class="form-group">
			<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
			<input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control">
		</div>

		<div class="form-group">
			<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
				<div class="radio">
					<label><input type="radio" name="jenis_kelamin" value="L" id="jenis_kelamin">Laki-Laki</label>
				</div>

				<div class="radio">
					<label><input type="radio" name="jenis_kelamin" value="P" id="jenis_kelamin">Perempuan</label>
				</div>	
		</div>

		<div class="form-group">
			<input type="submit" value="Tambah Siswa" class="btn btn-primary form-control">
		</div>
		
	</form> -->