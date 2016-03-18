<!-- <header id="section_header" class="navbar-fixed-top main-nav" role="banner">	
	<div class="top-header">
		<div class="container">
			<ul class="col-md-6 main-header-container">
				<li><a href="">Պատկերասրահ</a></li>
				<li><a href="">Քարտեզ</a></li>
				<li><a href="">Աշխատանք</a></li>
				<li><a href="">Կապ</a></li>
			</ul>
			<input type="text" placeholder="search" class="col-md-3 main-search">				
			<div class="col-md-2 pull-right" style="color: white">Eng Հայ</div>
		</div>
	</div>
</header> -->
<div class="preloader">
	<div class="preloder-wrap">
		<div class="preloder-inner"> 
			<div class="ball"></div> 
			<div class="ball"></div> 
			<div class="ball"></div> 
			<div class="ball"></div> 
			<div class="ball"></div> 
			<div class="ball"></div> 
			<div class="ball"></div>
		</div>
	</div>
</div>
<header id="navigation"> 
	<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
		<div class="container"> 
			<div class="navbar-header"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
				</button> 
				<a class="navbar-brand" href="/"><h1><img src="/himu/images/logo.png" alt="logo"></h1></a> 
			</div> 
			<div class="collapse navbar-collapse"> 				
				<ul class="nav navbar-nav navbar-right">					
					<li class="@if(Request::is('/')) active @endif"><a href="/">Գլխավոր</a></li> 
					<li class="dropdown @if(Request::is('about*')) active @endif">
						<a href="/about">Մեր մասին</a>
						<ul class="dropdown-menu">
						    <li><a tabindex="-1" href="/about/history">Դպրոցի պատմությունը</a></li>
						    <li class="divider"></li>
						    <li class="@if(Request::is('about/school/elementary')) active @endif"><a tabindex="-1" href="/about/school/elementary">Տարրական</a></li>
						    <li class="@if(Request::is('about/school/middle')) active @endif"><a tabindex="-1" href="/about/school/middle">Միջին</a></li>
						    <li class="@if(Request::is('about/school/high')) active @endif"><a tabindex="-1" href="/about/school/high">Ավագ</a></li>						    						   
						</ul>
					</li>
					<li class="dropdown @if(Request::is('members*') || Request::is('teachers*')) active @endif">
						<a href="javascript:void(0)">Անձնակազմ</a>
						<ul class="dropdown-menu">
						    <li><a tabindex="-1" href="/members/director">Տնօրեն</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/members/deputy-directors">Փոխտնօրեններ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/members/librarian">Գրադարանավար</a></li>
						    <li class="divider"></li>
						    <!--<li><a tabindex="-1" href="/members/nurse">Բուժքույր</a></li>-->
						    <li><a tabindex="-1" href="/members/soldier">Զինղեկ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/members/accountant">Հաշվապահ</a></li>						    						   
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/teachers">Ուս․ կազմ</a></li>						    
						</ul>
					</li>
					<li class="dropdown @if(Request::is('achivements*')) active @endif">
						<a href="javascript:void(0)">Մեր նվաճումները</a>
						<ul class="dropdown-menu">
						    <li><a tabindex="-1" href="/achivements/university">Բուհ ընդունելություն%</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/achivements/olimp">Օլիմպիադաներ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/achivements">Մրցույթներ</a></li>
						    <li class="divider"></li>						   
						</ul>
					</li>
					<li class="dropdown @if(Request::is('/life*')) active @endif">
						<a href="javascript:void(0)">Կյանքը դպրոցում</a>
						<ul class="dropdown-menu">
						    <li><a tabindex="-1" href="/announcements">Հայտարարութհուններ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/events">Միջոցառումներ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/tours">Շրջայցեր</a></li>
						    <li class="divider"></li>						   
						</ul>
					</li>
					<li class="dropdown @if(Request::is('/life*')) active @endif">
						<a href="javascript:void(0)">Ուսումնական</a>
						<ul class="dropdown-menu">
						    <li><a tabindex="-1" href="/">Դասավանդման մոտեցումներ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/life/activities">Մեթոդական զեկուցումներ</a></li>
						    <li class="divider"></li>
						    <li><a tabindex="-1" href="/life/walkthrough">Աշակերտական նախագծեր</a></li>
						    <li class="divider"></li>						   
						</ul>
					</li>				
					<li class="dropdown @if(Request::is('/supporters*')) active @endif">
						<a href="javascript:void(0)">Համայնք</a>
						<ul class="dropdown-menu">
						    <li><a tabindex="-1" href="/community/supporters">Մեր աջակիցները</a></li>						    						  
						</ul>
					</li>					
					<li class="@if(Request::is('contact')) active @endif"><a href="/contact">Կապ</a></li> 
				</ul> 
			</div> 
		</div> 
	</div><!--/navbar--> 
</header>