<!DOCTYPE html>
<html>
<head>
	{{-- Hallo --}}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1" >
	<link href="{{ asset('bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	<script src="{{ asset('http://cobasa/js/html5shiv_3_7_2.min.js')}}"></script>
	<script src="{{ asset('http://cobasa/js/respond_1_2_2.min.js')}}"></script>

	<title>Laravel Tutorial</title>
</head>
<body>
	<div class="container">
		@include('navbar')
		@yield('main')
	</div>

		@yield('footer')

	<script src="{{ asset('js/jquery_2_2_1.min.js') }}"></script>
	<script src="{{ asset('bootstrap-3.3.7-dist/j/bootstrap.min.js') }}"></script>
</body>
</html>