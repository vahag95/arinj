@extends('layouts.layout')
@section('title')
	Միջոցառումներ
@stop
@section('content')
	<section id="blog"> 
		<div class="container">
			<div class="row text-center clearfix">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="title-one">Միջոցառումներ</h2>					
				</div>
			</div> 
			<div class="row">				
				@include('events.parts.list')											
			</div> 
		</div> 
	</section> <!--/#blog-->
@stop