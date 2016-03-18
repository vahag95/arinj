@extends('layouts.layout')
@section('title')
	Հայտարարություններ
@stop
@section('content')
	<section id="blog"> 
		<div class="container">
			<div class="row text-center clearfix">
				<div class="col-sm-10 col-sm-offset-1">
					<h2 class="title-one">Հայտարարություններ</h2>					
				</div>
			</div> 
			<div class="row">								
				@include('announcements.parts.list')
			</div> 
		</div> 
	</section> <!--/#blog-->	
@stop