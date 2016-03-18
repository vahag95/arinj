@extends('layouts.layout')
@section('content')
	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(/images/landing.jpg);"> 
					<div class="carousel-caption"> 
						<div> 							
							<h2 style="color:#fc7700" class="animated bounceInLeft">Դպրոցը հայոց պետականության վերակերտման ու ստեղծագործման հրաշագործ բանալին է</h2>							
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(/images/landing2.jpg);top:70px"> 
					<div class="carousel-caption"> 
						<div> 							
							<h2 class="animated bounceInUp">Դպրոցի՛ց եվ դպրոցո՛վ պիտի հոսի հայոց հոգեմտավոր ներուժի կենարար հեղուկը</h2>
						</div> 
					</div> 
				</div> 
				<div class="item" style="background-image: url(/himu/images/slider/slide1.jpg)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInRight">Առինջի Կ․ Ծառուկյանի անվան միջնակարգ դպրոց</h2>							
						</div> 
					</div> 
				</div>
			</div><!--/.carousel-inner-->

			<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
			<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
		</div> 

	</section><!--/#home-->
	@include('home.parts.about')
	@include('home.parts.pupils')
	@include('home.parts.team')
	@include('home.parts.gallery')
	@include('home.parts.activities')
	@include('home.parts.contact')
@stop