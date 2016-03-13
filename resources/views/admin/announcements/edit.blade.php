@extends('layouts.admin.layout')
@section('title')
	Փոփոխել Հայտարարությունը
@stop
@section('content')	
	@include('alerts.messages')	
    <div class="col-sm-8 col-sm-offset-2 col-md-offset-0">    	
    	<h1>Փոփոխել Հայտարարությունը</h1>
    </div>
    <div class="col-md-12">
    	<div class="col-md-6 col-md-offset-2">
            {!! Form::model($announcement, [ 'url' => '/announcements/', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'teacher_edit']) !!}
                <div class="form-group">
                    <label>Վերնագիր</label>
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Հայտարարություն</label>
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                   
                </div>                
                <div class="form-group">                
                    {!! Form::submit('Պահպանել', ['class' => 'btn btn-success']) !!}
                </div>             
            {!! Form::close() !!}        
        </div>
    </div>    
@stop
