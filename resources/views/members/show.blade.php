@extends('layouts.layout')
@section('content')
	<section id="our-team">
		<div class="container">
			<div class="row text-center">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">{!! Lang::get("roles.".$role) !!}</h2>					
				</div>
			</div>
			<div class="row">
				@foreach($members as $member)
					<div class="col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-2">
						<img src="/images/members/{{ $member->image }}" alt="">
						<div>{{ $member->first_name }}</div>
						<div>{{ $member->last_name }}</div>
					</div>
				@endforeach
			</div>
		</div>
	</section><!--/#Our-Team-->
@stop