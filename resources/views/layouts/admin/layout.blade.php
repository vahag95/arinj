<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/admin/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/assets/admin/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/admin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <link rel="stylesheet" href="/assets/admin/style.css">
	<script src="/assets/admin/js/jquery.js"></script>	
	<script src="/assets/admin/js/bootstrap.min.js"></script>
	<script src="/assets/admin/js/main.js"></script>
	<!-- Morris Charts JavaScript -->
	<script src="/assets/admin/js/plugins/morris/raphael.min.js"></script>
	<!-- <script src="/assets/admin/js/plugins/morris/morris.min.js"></script>
	<script src="/assets/admin/js/plugins/morris/morris-data.js"></script> -->
	<script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>
<body>
	<div id="wrapper">

	    <!-- Navigation -->
	    @if(Auth::check())
		    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		        <!-- Brand and toggle get grouped for better mobile display -->
		        <div class="navbar-header">
		            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
		                <span class="sr-only">Toggle navigation</span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="index.html">Առինջի Կ․ Ծառուկյանի անվան միջնակարգ դպրոց</a>
		        </div>
		        <!-- Top Menu Items -->
		        <ul class="nav navbar-right top-nav">		            
		            <li class="dropdown">
		                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                	<i class="fa fa-user"></i> 
		                	{!! Auth::user()->first_name !!} 
		                	{!! Auth::user()->last_name !!}		                	
		                	<b class="caret"></b>
	                	</a>
		                <ul class="dropdown-menu">		                    
		                    <li>
		                        <a href="{{ url('logout') }}"><i class="fa fa-fw fa-power-off"></i>Դուրս գալ</a>
		                    </li>
		                </ul>
		            </li>
		        </ul>
		        <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
		        <div class="collapse navbar-collapse navbar-ex1-collapse">
		        	@yield('sidebar')
	        	</div>
		    </nav>
		@endif
		<div id="page-wrapper">
		    <div class="container-fluid">
			    @yield('content')		    	
		    </div>
	    </div>
    </div>
</body>
<!-- Bootstrap Core JavaScript 