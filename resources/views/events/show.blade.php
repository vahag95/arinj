@extends('layouts.layout')
@section('title')
	{{ $event->title }}
@stop
@section('content')	
	<!-- Core CSS file -->
	<link rel="stylesheet" href="/photoSwipe/dist/photoswipe.css"> 

	<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
	     In the folder of skin CSS file there are also:
	     - .png and .svg icons sprite, 
	     - preloader.gif (for browsers that do not support CSS animations) -->
	<link rel="stylesheet" href="/photoSwipe/dist/default-skin/default-skin.css"> 

	<!-- Core JS file -->
	<script src="/photoSwipe/dist/photoswipe.min.js"></script> 

	<!-- UI JS file -->
	<script src="/photoSwipe/dist/photoswipe-ui-default.min.js"></script>
	
	<section id="blog"> 
		<div class="container">
			<div class="row text-center clearfix">
				<div class="single_event_title col-sm-10 col-sm-offset-1">
					<h2 class="title-one">{{ $event->title }}</h2>					
				</div>
			</div> 
			<div class="row">								
				@foreach($event->images as $image)
					<div style="height:250px" class="col-md-4 col-sm-12">
						<img src="https://s3-us-west-2.amazonaws.com/arinj{{ $image->image_url }}" width="100%" height="100%">
					</div>
				@endforeach
			</div> 
		</div> 
	</section> <!--/#blog-->	
@stop