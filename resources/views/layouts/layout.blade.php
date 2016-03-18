<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">    
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Առինջ, Դպրոց, Arinj, dproc, Hayastan, Հայաստան, միջնակարգ, ավագ" /> 
	<meta name="author" content="Առինջ"> 
	@yield('styles')
	<title>@yield('title')</title>

	<!-- styles -->
	<link rel="stylesheet" href="/assets/css/bootstrap.css">
	<link rel="stylesheet" href="/assets/css/style.css">
	
	<link href="/himu/css/prettyPhoto.css" rel="stylesheet"> 
	<link href="/himu/css/font-awesome.min.css" rel="stylesheet"> 
	<link href="/himu/css/animate.css" rel="stylesheet"> 
	<link href="/himu/css/main.css" rel="stylesheet">
	<link href="/himu/css/responsive.css" rel="stylesheet"> 
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
	<link rel="shortcut icon" href="/himu/images/ico/favicon.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/himu/images/ico/apple-touch-icon-144-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/himu/images/ico/apple-touch-icon-114-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/himu/images/ico/apple-touch-icon-72-precomposed.png"> 
	<link rel="apple-touch-icon-precomposed" href="/himu/images/ico/apple-touch-icon-57-precomposed.png">
	@include('layouts.headers.main')
	
	<!-- Scripts -->
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="/assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="/himu/js/jquery.js"></script> 
	<script type="text/javascript" src="/himu/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="/himu/js/smoothscroll.js"></script> 
	<script type="text/javascript" src="/himu/js/jquery.isotope.min.js"></script>
	<script type="text/javascript" src="/himu/js/jquery.prettyPhoto.js"></script> 
	<script type="text/javascript" src="/himu/js/jquery.parallax.js"></script> 
	<script type="text/javascript" src="/himu/js/main.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/js/umd/dropdown.js"></script>
</head>
<body>	
	@yield('content')
	@yield('scripts')	
</body>
</html>