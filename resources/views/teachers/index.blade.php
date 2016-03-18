@extends('layouts.layout')
@section('content')
	<section id="our-team">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Ուսուցչական կազմ</h2>					
				</div>
			</div>			
			<div class="row item active">
				@foreach($teachers as $teacher)
					<div class="col-sm-6 col-md-3">
						<div class="single-member">
							<img src="https://s3-us-west-2.amazonaws.com/arinj/{{ $teacher->image }}" alt="team member" width="200" height="200" />
							<h4>{!! $teacher->first_name !!} {!! $teacher->last_name !!}</h4>
							<b>Մաթեմատիկա</b>
							<p>Lorem ipsum dolor sit amet</p>							
						</div>
					</div>
				@endforeach
			</div>									
		</div>
	</section><!--/#Our-Team-->
@stop