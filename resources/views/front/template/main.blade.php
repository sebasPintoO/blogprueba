<!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Blog de Prueba">
    <meta name="author" content="Sebastian Pinto">

	<title>@yield('title', 'Default')</title>
	<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/chosen4.1.2/chosen.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/Trumbowyg/dist/ui/trumbowyg.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/customcss/blog-home.css') }}">
	<link rel="stylesheet"  href="{{ asset('plugins/customcss/animate.css') }}">


	<!-- Custom Fonts -->

	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
	
	@include('front.template.partials.nav')
	@include('front.template.partials.banner-ultimas')

	
	@yield('content')

	<script  src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
	<script src="{{ asset('plugins/jquery/js/jquery-2.1.4.js') }}"></script>
	<script src="{{ asset('plugins/chosen4.1.2/chosen.jquery.js') }}"></script>
	<script src="{{ asset('plugins/Trumbowyg/dist/langs/es.min.js') }}"></script>
	<script src="{{ asset('plugins/Trumbowyg/dist/trumbowyg.js') }}"></script>
	<script src="{{ asset('plugins/facebooksdk/facebook-sdk.js') }}"></script>
	@yield('js')

</body>