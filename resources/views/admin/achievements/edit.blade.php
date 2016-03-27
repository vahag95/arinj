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
        {!! Form::model($data, [ 'url' => '/achievements/update-'.$type, 'method' => 'post' ]) !!}
    	<div class="col-md-12">    		
    	   	{!! Form::textarea('value', null, ['class' => 'form-control']) !!}
    	</div>
            {!! Form::submit('Պահպանել', ['class' => 'btn btn-success']) !!}
        {!! Form::close() !!}        
    </div>    
@stop
