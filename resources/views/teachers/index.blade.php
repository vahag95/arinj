@extends('layouts.layout')
@section('content')
	<section id="our-team">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Ուսուցչական կազմ</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
				</div>
			</div>			
			<div class="row item active">
				@foreach($teachers as $teacher)
					<div class="col-sm-6 col-md-3">
						<div class="single-member">
							<img src="https://s3-us-west-2.amazonaws.com/arinj/{{ $teacher->image }}" alt="team member" width="200" height="200" />
							<h4>{!! $teacher->first_name !!} {!! $teacher->last_name !!}</h4>
							<b>{!! Lang::get("roles.".$teacher->role) !!}</b>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
							<div class="socials">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				@endforeach
			</div>									
		</div>
	</section><!--/#Our-Team-->
@stop