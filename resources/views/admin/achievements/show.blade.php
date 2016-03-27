@extends('layouts.admin.layout')
@section('title')
	{{ $title }}
@stop
@section('content')	
	@include('alerts.messages')	
    <div class="col-sm-8 col-sm-offset-2 col-md-offset-0">    	
    	<h1>{{ $title }}</h1>
    </div>
    <div class="col-md-12">    	
    	<div class="col-md-12">    		
    		{!! $data->value !!}		
    	</div>        
        <a style="margin-top: 30px" href="/achievements/edit-{{ $type }}" class="btn btn-success">Փոփոխել</a>
    </div>    
@stop
