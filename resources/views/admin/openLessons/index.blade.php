@extends('layouts.admin.layout')
@section('title')
	Բաց Դասեր
@stop
@section('content')    
	@include('alerts.messages')    
    <div class="col-sm-8 col-sm-offset-2 col-md-offset-0">
    	<h1>Բաց Դասեր</h1>
    </div>    
    <div class="col-md-12">     
        <div class="col-md-4 col-md-offset-8">
            <a href="open-lessons/create" class="changeCount btn btn-primary pull-right">Ավելացնել</a>
        </div>
        <div class="col-md-12">
            <div class="col-md-5">
                Վերնագիր
            </div>
            <div class="col-md-4">
                Տեղադրման օր
            </div>
            <div class="col-md-3">                
                <div class="col-md-6">
                    Նկարներ
                </div>
                <div class="col-md-6">
                    
                </div>
            </div>
            <hr>
            @include('admin.openLessons.parts.list')          
        </div>
    </div>
@stop
