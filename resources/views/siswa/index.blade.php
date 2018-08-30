@extends('template')

@section('main')
	<div id="siswa">
		@if(!empty($siswa_list))
		<table class="table">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama</th>
					<th>Tanggal</th>
					<th>Gender</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($siswa_list as $siswa): ?>
				<tr>
					<td>{{ $siswa->nisn }}</td>
					<td>{{ $siswa->nama_siswa }}</td>
					<td>{{ $siswa->tgl_lahir }}</td>
					<td>{{ $siswa->jenis_kelamin }}</td>
				</tr>
				<?php endforeach ?>
			</tbody>
		</table>		
		@else
			<p>Data Not Found</p>
		@endif

		<div class="pull-left">
			<strong>Jumlah Siswa : {{ $jumah_siswa }}</strong>
		</div>
	</div>
@stop
	@section('footer')
		<div id="footer">
			<p>&copy: 2018 Laravel APP Dev</p>
		</div>
@stop
