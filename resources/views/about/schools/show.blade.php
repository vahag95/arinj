@extends('layouts.layout')
@section('content')	
	<section id="our-team">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">{!! Lang::get("schools.".$type) !!}</h2>					
				</div>
			</div>
			<div class="row">				
				@if($type == 'middle')
					<center><h2>Երեխան բնության ամենանվիրական հրաշքն է,բնության մեծագույն պարգևն աշխարհում:</h2></center>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle1.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle1.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle2.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle2.jpg" height="271" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle3.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle3.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle4.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle4.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle5.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle5.jpg" alt="">
					</div>
					<div class="col-md-4 col-md-offset-4 school_page_image">
						<img onclick="imageOpen('/images/schools/middle/middle6.jpg', {{ json_encode(['/images/schools/middle/middle.jpg', '/images/schools/middle/middle1.jpg', '/images/schools/middle/middle2.jpg', '/images/schools/middle/middle3.jpg', '/images/schools/middle/middle4.jpg', '/images/schools/middle/middle5.jpg', '/images/schools/middle/middle6.jpg']) }})" width="100%" src="/images/schools/middle/middle6.jpg" alt="">
					</div>					
				@elseif($type == 'elementary')
					<center><h2>Ամեն մի երեխա մի ուրույն աշխարհ է՝ շքեղ, հարուստ.միայն պետք է կարողանալ ճիշտ կարդալ այդ աշխարհը՝այն ամուր կառուցելու, ճոխացնելու, առավել հարստացնելու համար:</h2></center>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/elementary/elementary.jpg', {{ json_encode(['/images/schools/elementary/elementary.jpg', '/images/schools/elementary/elementary1.jpg', '/images/schools/elementary/elementary2.jpg', '/images/schools/elementary/elementary3.jpg', '/images/schools/elementary/elementary4.jpg', '/images/schools/elementary/elementary5.jpg']) }})" width="100%" src="/images/schools/elementary/elementary.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/elementary/elementary1.jpg', {{ json_encode(['/images/schools/elementary/elementary.jpg', '/images/schools/elementary/elementary1.jpg', '/images/schools/elementary/elementary2.jpg', '/images/schools/elementary/elementary3.jpg', '/images/schools/elementary/elementary4.jpg', '/images/schools/elementary/elementary5.jpg']) }})" width="100%" src="/images/schools/elementary/elementary1.jpg" height="271" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/elementary/elementary2.jpg', {{ json_encode(['/images/schools/elementary/elementary.jpg', '/images/schools/elementary/elementary1.jpg', '/images/schools/elementary/elementary2.jpg', '/images/schools/elementary/elementary3.jpg', '/images/schools/elementary/elementary4.jpg', '/images/schools/elementary/elementary5.jpg']) }})" width="100%" src="/images/schools/elementary/elementary2.jpg" height="271" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/elementary/elementary3.jpg', {{ json_encode(['/images/schools/elementary/elementary.jpg', '/images/schools/elementary/elementary1.jpg', '/images/schools/elementary/elementary2.jpg', '/images/schools/elementary/elementary3.jpg', '/images/schools/elementary/elementary4.jpg', '/images/schools/elementary/elementary5.jpg']) }})" width="100%" src="/images/schools/elementary/elementary3.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/elementary/elementary4.jpg', {{ json_encode(['/images/schools/elementary/elementary.jpg', '/images/schools/elementary/elementary1.jpg', '/images/schools/elementary/elementary2.jpg', '/images/schools/elementary/elementary3.jpg', '/images/schools/elementary/elementary4.jpg', '/images/schools/elementary/elementary5.jpg']) }})" width="100%" src="/images/schools/elementary/elementary4.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/elementary/elementary5.jpg', {{ json_encode(['/images/schools/elementary/elementary.jpg', '/images/schools/elementary/elementary1.jpg', '/images/schools/elementary/elementary2.jpg', '/images/schools/elementary/elementary3.jpg', '/images/schools/elementary/elementary4.jpg', '/images/schools/elementary/elementary5.jpg']) }})" width="100%" src="/images/schools/elementary/elementary5.jpg" alt="">
					</div>
				@else
					<center><h2>Հենց այս կերպ է հարատևում կյանքը, հավերժագնա դառնում սերունդների երթը, սերունդների փոխհաջորդումը:</h2></center>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" height="271" src="/images/schools/high/high.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high1.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" src="/images/schools/high/high1.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high2.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" src="/images/schools/high/high2.jpg" alt="">
					</div>
					<div class="col-md-12 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high3.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" height="500" src="/images/schools/high/high3.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high4.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" src="/images/schools/high/high4.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high5.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" src="/images/schools/high/high5.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high6.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" height="241px" src="/images/schools/high/high6.jpg" alt="">
					</div>
					<div class="col-md-4 school_page_image">
						<img onclick="imageOpen('/images/schools/high/high7.jpg', {{ json_encode(['/images/schools/high/high.jpg', '/images/schools/high/high1.jpg', '/images/schools/high/high2.jpg', '/images/schools/high/high3.jpg', '/images/schools/high/high4.jpg', '/images/schools/high/high5.jpg', '/images/schools/high/high6.jpg', '/images/schools/high/high7.jpg']) }})" width="100%" src="/images/schools/high/high7.jpg" alt="">
					</div>					
				@endif				
			</div>
		</div>
	</section><!--/#Our-Team-->
	<script type="text/javascript"
		src="http://slideshow.triptracker.net/slide.js"></script>	
	<script type="text/javascript">
	function imageOpen(source, sources){		
		var viewer = new PhotoViewer();
		viewer.add(source);
		for(var src in sources){
			if( sources[src] !== source){
				viewer.add(sources[src]);
			}
		}
		viewer.setBorderWidth(0);
		viewer.disableEmailLink();		
		viewer.show(0);
	}
</script>
@stop