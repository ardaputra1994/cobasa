<!-- @if(isset($siswa))
	{!! Form::hidden('id', $siswa->id) !!}
@endif	 -->			
<!-- Form NISN -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('nisn') ? 'has-error' : 'has-success'}}">
@else
	<div class="form-group">
@endif
	{!! Form::label('nisn', 'NISN', ['class' => 'control-label']) !!}
	{!! Form::text('nisn', null, ['class' => 'form-control']) !!}

@if ($errors->has('nisn'))
	<span class="help-block">{{ $errors->first('nisn') }}</span>
@endif
     </div>
<!-- End Form NISN -->
					
<!-- Form Nama Siswa -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('nama_siswa') ? 'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
	{!! Form::label('nama_siswa', 'Nama Siswa', ['class' => 'control-label']) !!}
	{!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}

@if ($errors->has('nama_siswa'))
	<span class="help-block">{{ $errors->first('nama_siswa') }}</span>
@endif
	</div>
<!-- End Form Nama Siswa -->

<!-- Form Tanggal Lahir -->				
@if ($errors->any())
	<div class="form-group {{ $errors->has('tgl_lahir') ? 'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
	{!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class' => 'control-label']) !!}
	{!! Form::date('tgl_lahir', !empty($siswa) ? $siswa->tgl_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
@if ($errors->has('tgl_lahir'))
	<span class="help-block">{{ $errors->first('tgl_lahir') }}</span>
@endif
	</div>
<!-- End Form Tanggal Lahir -->
				
<!-- Form Jenis Kelamin -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif				
	{!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'control-label']) !!}
		<div class="radio">
			<label>{!! Form::radio('jenis_kelamin', 'L') !!} Laki-Laki</label>
		</div>
		<div class="radio">
			<label>{!! Form::radio('jenis_kelamin', 'P') !!} Perempuan</label>
		</div>
			@if ($errors->has('jenis_kelamin'))
				<span class="help-block">{{ $errors->first('jenis_kelamin') }}</span>
			@endif
	</div>				
<!-- End Form Jenis Kelamin -->

<!-- Form Nomor Telepon -->
@if ($errors->any())
	<div class="form-group {{ $errors->has('no_telepon') ? 'has-error' : 'has-success' }}">
@else
	<div class="form-group">
@endif
	{!! Form::label('no_telepon', 'Telepon', ['class' => 'control-label']) !!}
	{!! Form::text('no_telepon', null, ['class' => 'form-control']) !!}

@if ($errors->has('no_telepon'))
	<span class="help-block">{{ $errors->first('no_telepon') }}</span>
@endif
	</div>
<!-- End Form Nomor Telepon -->

<div class="form-group">
	{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}	
</div>