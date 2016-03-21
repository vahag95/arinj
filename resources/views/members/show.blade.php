@extends('layouts.layout')
@section('content')	
	<section id="our-team">
		<div class="container members">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">{!! Lang::get("roles.".$role) !!}</h2>					
				</div>
			</div>
			<div class="row">
				@foreach($members as $member)
					<div class="col-sm-8 col-sm-offset-2 col-md-11 col-md-offset-1 member">
						<div class="col-md-4">
							<img onLoad="ozhpixel(this)" src="https://s3-us-west-2.amazonaws.com/arinj/{{ $member->image }}" alt="" width="300">
						</div>
						<div class="col-md-7">
							<div class="col-md-12 col-sm-12"><b>{{ $member->first_name }} {{ $member->last_name }} {{ $member->father_name }}</b></div>
							<br>
							<br>
							<div class="col-md-12 col-sm-12" style="font-size: 16px">{!! $member->description !!}</div>							
						</div>					
					</div>
				@endforeach
			</div>
		</div>		
	</section><!--/#Our-Team-->
	<script>
		function ozhpixel(image){
			// console.log( image );			
			// $(image).height($(image).height() - ($(image).width() - 200));
			// $(image).width(300);
		}
	</script>
@stop