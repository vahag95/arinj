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
					<div class="col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-2 member">
						<div class="col-md-3">
							<img src="https://s3-us-west-2.amazonaws.com/arinj/{{ $member->image }}" width="200" height="200" alt="">
						</div>
						<div class="col-md-9">
							<div class="col-md-12 col-sm-12"><b>{{ $member->first_name }} {{ $member->last_name }}</b></div>							
						</div>						
					</div>
				@endforeach
			</div>
		</div>
	</section><!--/#Our-Team-->
@stop