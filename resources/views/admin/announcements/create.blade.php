@extends('layouts.admin.layout')
@section('title')
	Ավելացնել Հայտարարություն
@stop
@section('content')	
	@include('alerts.messages')	
    <div class="col-sm-8 col-sm-offset-2 col-md-offset-0">    	
    	<h1>Ավելացնել Հայտարարություն</h1>
    </div>
    <div class="col-md-12">
    	<div class="col-md-6 col-md-offset-2">
            {!! Form::open([ 'url' => '/announcements/', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'teacher_edit']) !!}
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
                    {!! Form::submit('Ավելացնել', ['class' => 'btn btn-success']) !!}
                </div>             
            {!! Form::close() !!}        
        </div>
    </div>    
@stop
