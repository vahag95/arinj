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
					<div class="col-md-4">
						<img width="100%" src="/images/landing2.jpg" alt="">
					</div>
				@elseif($type == 'elementary')
					<center><h2>Ամեն մի երեխա մի ուրույն աշխարհ է՝ շքեղ, հարուստ.միայն պետք է կարողալ ճիշտ կարդալ այդ աշխարհը՝այն ամուր կառուցելու, ճոխացնելու, առավել հարստացնելու համար:</h2></center>
					<div class="col-md-4">
						<img width="100%" src="/images/landing2.jpg" alt="">
					</div>
				@else
					<center><h2>Սովորողին պետք է դիտել որպես վաղվա քաղաքացու, նրա հոգին հարկավոր է պտղավորել զգույշ, ուշադիր սիրով։</h2></center>
					<div class="col-md-4">
						<img width="100%" src="/images/landing2.jpg" alt="">
					</div>					
				@endif				
			</div>
		</div>
	</section><!--/#Our-Team-->
@stop