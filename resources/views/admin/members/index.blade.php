@extends('layouts.admin.layout')
@section('title')
    Ադմին
@stop
@section('content')	
    <div class="col-md-12">
        <h2>Անձնակազմ</h2>
    </div>
    @include('admin.members.parts.list')
@stop
