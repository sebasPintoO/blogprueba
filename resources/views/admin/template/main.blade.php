<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default')| Panel de Administración</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/chosen4.1.2/chosen.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/Trumbowyg/dist/ui/trumbowyg.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/customcss/landing-page.css') }}">

	<!-- Custom Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	
	@include('admin.template.partials.nav')

	
		
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading text-center">
				@yield('title','Default')
			</div>

			<div class="panel-body">
				@include('flash::message')
				@include('admin.template.partials.errors')
				<section>
					@yield('content')
				</section>
			</div>

			<div class="panel-footer text-center text-muted">
				Designed by: Los Lobos | 2015 | Todos los Derechos Reservados

			</div>
	</div>		

	

	<script  src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('plugins/chosen4.1.2/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/Trumbowyg/dist/langs/es.min.js') }}"></script>
	<script src="{{ asset('plugins/Trumbowyg/dist/trumbowyg.js') }}"></script>
	@yield('js')


</body>
</html>