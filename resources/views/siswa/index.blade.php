<!-- <!DOCTYPE html>
<html>
<head>
	<title>Data Siswa</title>
</head>
<body>
	<div id="datasiswa">
		<h1>Data Siswa</h1>
		<?php if(!empty($siswa)): ?>
			<ul>
				<?php foreach($siswa as $s): ?>
					<li><?= $s ?></li>
				<?php endforeach ?>	
			</ul>
		<?php else: ?>
			<p>Tidak Ada Data</p>		
		<?php endif ?>	
	</div>
</body>
</html> -->

@extends('template')

@section('main')
	<div id="siswa">
		<h2>Data Siswa</h2>
			<?php if(!empty($siswa)): ?>
				<ul>
					<?php foreach($siswa as $s): ?>
						<li><?= $s ?></li>
					<?php endforeach ?>	
				</ul>
			<?php else: ?>
				<p>Tidak Ada Data</p>
			<?php endif ?>
	</div>
@stop
	@section('footer')
		<div id="footer">
			<p>&copy: 2018 Laravel APP Dev</p>
		</div>
@stop
