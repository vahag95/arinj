@extends('layouts.layout')
@section('title')
	{{ $type }}
@stop
@section('content')
	<script src="/assets/js/jR3DCarousel.js"></script>	
	<section>
		<div class="container">
			<div class="row">
				<div class="row text-center">
					<div class="col-sm-8 col-sm-offset-2">
						<h2 class="title-one">{!! Lang::get("main.".$type) !!}</h2>					
					</div>
				</div>
				<div>
					<div class="col-md-8 col-md-offset-2" style="overflow:hidden;padding:20px;">
						<div class="jR3DCarouselGallery"></div>
					</div>
				</div>
				<div style="font-size: 22px;font-style: italic;" class="col-md-12 row">
					<div class="col-md-8 col-md-offset-2">
						{!! $achievement->value !!}
					</div>
				</div>				
			</div>
		</div>
	</section>	
	<script src="/assets/js/xgallerify.min.js"></script>
	<script>
		$(document).on('ready', function(){			
			var slides = [
			    {src: '/images/competitions/1.jpg'},
			    {src: '/images/competitions/2.jpeg'},
			    {src: '/images/competitions/3.jpeg'},			    
			    {src: '/images/competitions/4.jpeg'},			    
			    {src: '/images/competitions/5.jpeg'},			    
			    {src: '/images/competitions/6.jpeg'},			    
			    {src: '/images/competitions/7.jpeg'},			    
			    {src: '/images/competitions/8.jpeg'},			    
			    {src: '/images/competitions/9.jpeg'},			    
			    {src: '/images/competitions/10.jpeg'},			    
			];
			$('.jR3DCarouselGallery').jR3DCarousel({
			    //width: 50%,                 /* largest allowed width */
			    height: 450,              /* largest allowed height */
			    slides: slides,             /* array of images source or gets slides by 'slide' class */
			    slideLayout : 'contain',    /* "contain"-fit as per to aspect ratio | "fill"-stretches to fill |  "cover"-overflows but maintains ratio */
			    animation: 'slide3D',        /* slide | slide3D | scroll | scroll3D | fade */
			    animationDuration: 700,     /* animation speed in milliseconds */
			    animationInterval: 4000,    /* Interval between transitions or per slide show time in milliseconds */
			    autoplay: true,             /* start playing Carousel continuously, pauses when slide is hovered */
			    // onSlideShow: shown,         /* callback when Slide show event occurs */
			    navigation: 'circles'       /* circles | squares | '' */
			});
		})
	</script>
@stop