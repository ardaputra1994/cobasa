<!-- <!DOCTYPE html>
<html>
<head>
	<title>Welcome Hompage</title>
</head>
<body>
	<div id="homepage">
		<h2>Homepage</h2>
		<p>Selamat Belajar Laravel</p>
	</div>
</body>
</html> -->
@extends('template')

@section('main')
	<div id="homepage">
		<h2>Homepage</h2>
		<p>Selamat Belajar Laravel Insya Allah Pasti Bisa</p>

	</div>
@stop

@section('footer')
		@include('footer')
@stop