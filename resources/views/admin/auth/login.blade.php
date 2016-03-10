@extends('layouts.admin.layout')
@section('title')
    Լոգին
@stop
@section('content')
    <div class="col-md-4 col-md-offset-3">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Մուտքագրեք ձեր տվյալները</h3>
            </div>
            <div class="panel-body">
                @include('alerts.messages')

                {!! Form::open([ 'url' => url('login') , 'method' => 'POST' , 'class' => 'form' ]) !!}

                    <div class="form-group">
                        {!! Form::email('email', null ,[ 'class' => 'form-control', 'placeholder' => 'Էլ․ փոստ' ]) !!}
                    </div>

                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Գաղտնաբառ']) !!}
                    </div>                    

                    <div class="form-group">
                        {!! Form::submit('Մուտք',['class' => 'btn btn-lg btn-success btn-block' ]) !!}
                    </div>
                    
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop