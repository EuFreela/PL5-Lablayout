<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!-- AUTHOR -->
    <meta name="description" content="Backend GI">
    <meta name="keywords" content="Backend,Html,Laravel">
    <meta name="author" content="Lameck Fernandes <github.com/EuFreelas>">
    <!-- /AUTHOR -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title')</title>
	<link type="text/css" href="{{asset('lameck/lablayout/edmin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('lameck/lablayout/edmin/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('lameck/lablayout/edmin/css/theme.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('lameck/lablayout/edmin/css/app.css')}}" rel="stylesheet">
	<link type="text/css" href="{{asset('lameck/lablayout/edmin/images/icons/css/font-awesome.css')}}" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
</head>
<body>

	@include('Lameck\Lablayout::layout.partials.header')
	
	@yield('content')

	@include('Lameck\Lablayout::layout.partials.footer')
	
	<script src="{{asset('lameck/lablayout/edmin/scripts/jquery-1.9.1.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('lameck/lablayout/edmin/scripts/jquery-ui-1.10.1.custom.min.js')}}" type="text/javascript"></script>
	<script src="{{asset('lameck/lablayout/edmin/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
</body>