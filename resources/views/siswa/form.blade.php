<div class="form-group">
					{!! Form::label('nisn', 'NISN', ['class' => 'control-label']) !!}
					{!! Form::text('text', '', ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">   
					{!! Form::label('nama_siswa', 'Nama Siswa', ['class' => 'control-label']) !!}
					{!! Form::text('nama_siswa', null, ['class' => 'form-control']) !!}
				</div>

				<div class="form-group">
					{!! Form::label('tgl_lahir', 'Tanggal Lahir', ['class' => 'control-label']) !!}
					{!! Form::date('tgl_lahir', !empty($siswa) ? $siswa->tgl_lahir->format('Y-m-d'): null, ['class' => 'form-control', 'id' => 'tgl_lahir']) !!}
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
					{!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}	
				</div>