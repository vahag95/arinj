@extends('layouts.layout')
@section('title')
	{{ $type }}
@stop
@section('content')
	<script src="https://cdn.rawgit.com/vinayakjadhav/jR3DCarousel/v0.0.8/dist/jR3DCarousel.min.js"></script>
	<section>
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">{!! Lang::get("main.".$type) !!}</h2>					
				</div>
			</div>
			<div class="row">
				<div class="col-md-12" style="border:2px solid #ececec;padding:20px;border-radius: 20px">
					<div class="jR3DCarouselGallery"></div>
				</div>
			</div>
			<div style="font-size: 22px;font-style: italic;" class="col-md-12">				
				<div class="col-md-4 competition_photos">
					<div class="slide">
						<img style="border:2px solid #fc7700" src="/images/competitions/1.jpg" alt="">
					</div>
					<div class="slide">
						<img style="border:2px solid #fc7700" src="/images/competitions/2.jpeg" alt="">
					</div>
					<div class="slide">
						<img style="border:2px solid #fc7700" src="/images/competitions/5.jpeg" alt="">
					</div>
				</div>			
				<div class="col-md-8">
					{!! $achievement->value !!}
				</div>				
			</div>			
		</div>
	</section>	
	<script src="/assets/js/xgallerify.min.js"></script>
	<script>
		$(document).on('ready', function(){
			var gallery = $('.competition_photos').gallerify({
			  margin:10,
			  mode:'bootstrap',
			  lastRow:'adjust'
			});
			var slides = [
			    {src: '/images/competitions/1.jpg'},
			    {src: '/images/competitions/2.jpeg'},
			    {src: '/images/competitions/3.jpeg'},			    
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