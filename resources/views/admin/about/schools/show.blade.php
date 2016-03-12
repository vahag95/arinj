@extends('layouts.admin.layout')
@section('title')
	{{ $title }}
@stop
@section('content')	
	@include('alerts.messages')
    <div class="col-sm-8 col-sm-offset-2 col-md-offset-0">
    	<h2 class="title-one">{!! Lang::get("schools.".$title) !!}</h2>					
    </div>
    <div class="col-md-12">
    	<div class="col-md-8">
		    {!! Lang::get("schools.".$title) !!} դպրոցում աշակերտների թիվը <b>{{ $count }}</b>
    	</div>
    	<div class="col-md-4">
		    <button class="changeCount btn btn-primary pull-right">Փոփոխել</button>
    	</div>
    </div>       
    <div class="col-md-6 changes" style="display:none">
    	{!! Form::open() !!}	    
		<input type="number" min="0" name="value" style="margin-bottom: 20px" class="form-control count">
	    {!! Form::hidden('key', $key) !!}
	    <button class="btn btn-success">Պահպանել</button>
	    {!! Form::close() !!}
    </div>
	<script>
		$(document).on('ready', function(){
			$('.changeCount').on('click', function(){
				$('.changes').show();
			})		
		})
	</script>
@stop
