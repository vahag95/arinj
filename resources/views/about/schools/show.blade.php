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
				<div class="col-md-6">
					<img width="400" src="/images/landing.jpg" alt="">
				</div>
				<div class="col-md-6">
					{!! Lang::get("schools.".$type) !!} դպրոցում մենք ունենք 150 ասակերտ					
				</div>
			</div>
		</div>
	</section><!--/#Our-Team-->
@stop