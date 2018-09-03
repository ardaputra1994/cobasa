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
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach($siswa_list as $siswa): ?>
				<tr>
					<td>{{ $siswa->nisn }}</td>
					<td>{{ $siswa->nama_siswa }}</td>
					<td>{{ $siswa->tgl_lahir }}</td>
					<td>{{ $siswa->jenis_kelamin }}</td>
					<td>
						<div class="box-button">
							{{ link_to('siswa/' . $siswa->id, 'Detail', ['class' => 'btn btn-success btn-sm']) }}
						</div>
						<div class="box-button">
							{{ link_to('siswa/' . $siswa->id . '/edit', 'Edit', ['class' => 'btn btn-warning btn-sm']) }}
						</div>
						<div class="box-button">
							{!! Form::open(['method' => 'DELETE', 'action' => ['SiswaController@destroy', $siswa->id]]) !!}
							{!! Form::submit('Delete', ['class' => 'btn btn-danger btn-sm']) !!}
							{!! Form::close() !!}
						</div>							
					</td>

				</tr>
				<?php endforeach ?>
			</tbody>
		</table>		
		@else
			<p>Data Not Found</p>
		@endif
		<div class="table-nav"> 
			<div class="jumlah-data">
				<strong>Jumlah Siswa : {{ $jumah_siswa }}</strong>
			</div>
			<div class="paging">
			{{ $siswa_list->links() }}
			</div>
		</div>
		
		<div class="tombol-nav">
			<div>
				<a href="siswa/create" class="btn btn-primary"> Tambah Siswa</a>
			</div>
		</div>
	</div>
@stop
	@section('footer')
		@include('footer')
@stop
