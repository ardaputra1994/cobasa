@extends('template')

@section('main')
<div id="siswa">
	<h2>Tambah Siswa</h2>		
		{!! Form::open(['url' => 'siswa']) !!}
				<div class="form-group">
					{!! Form::label('nisn', 'NISN', ['class' => 'control-label']) !!}
					{!! Form::text('text', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('nama_siswa', 'Nama Siswa', ['class' => 'control-label']) !!}
					{!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class' => 'control-label']) !!}
					{!! Form::date('tgl_lahir', null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label']) !!}
						<div class="radio">
							<label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-Laki</label>
						</div>
						<div class="radio">
							<label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
						</div>
				</div>	

				<div class="form-group">
					{!! Form::submit('Tambah Siswa', ['class' => 'btn btn-primary form-control']) !!}	
				</div>

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