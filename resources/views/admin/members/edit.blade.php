@extends('layouts.admin.layout')
@section('title')
    Ադմին
@stop
@section('sidebar')
    <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->    
    <ul class="nav navbar-nav side-nav">
        <li class="active">            
            <a href="javascript:;" data-toggle="collapse" data-target="#we"><i class="fa fa-fw fa-user"></i>Մենք <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="we" class="collapse in">
                <li>
                    <a href="/members">Անձնակազմ</a>
                </li>
                <li>
                    <a href="/teachers">Ուսուցիչներ</a>
                </li>                
            </ul>
        </li>        
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#achievements"><i class="fa fa-fw fa-bar-chart-o"></i>Մեր նվաճումները <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="achievements" class="collapse">
                <li>
                    <a href="#">Բուհ․ Ընդունելություններ %</a>
                </li>
                <li>
                    <a href="#">Օլիմպիադաներ</a>
                </li>                
            </ul>
        </li>
        <li>
            <a href="javascript:;" data-toggle="collapse" data-target="#life_at_school"><i class="fa fa-fw fa-arrows-v"></i> Կյանքը դպրոցում <i class="fa fa-fw fa-caret-down"></i></a>
            <ul id="life_at_school" class="collapse">
                <li>
                    <a href="#">Հայտարարություններ</a>
                </li>
                <li>
                    <a href="#">Միջոցառումներ</a>
                </li>
                <li>
                    <a href="#">Շրջայցեր</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li>
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
        <li>
            <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
        </li>
        <li>
            <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
        </li>    
        <li>
            <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
        </li>
        <li>
            <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
        </li>
    </ul>	
@stop
@section('content')	
    @include('alerts.messages')
    <div class="col-md-12 member_edit_header">
        <h2>{!! $member->first_name !!} {!! $member->last_name !!}</h2>
    </div>
    <div class="col-md-6 col-md-offset-2">
        {!! Form::model($member, [ 'url' => '/members/'.$member->id , 'method' => 'put', 'enctype' => 'multipart/form-data', 'id' => 'member_edit']) !!}
            <div class="form-group">
                <label>Անուն</label>
                {{ $member->first_name }}
            </div>
            <div class="form-group">
                <label>Ազգանուն</label>
                {{ $member->last_name }}
            </div>
            <div class="form-group">
                <label>Պաշտոնը</label>
                {{ Lang::get("roles.$member->role") }}
            </div>
            <div class="form-group">
                <label>Նկար</label>                
                @if( !isset( $member->image ) || $member->image == "" )                       
                    <div class="member_photo" style="display: none;">
                        <img src="" width="200" height="200" id="avatar">
                    </div>
                    {!! Form::file('image', ['class' => 'form-control', 'id' => 'image', 'accept' => 'image/jpeg,image/png,image/gif']) !!}                
                @else
                    <div class="member_photo">
                        <img src="/images/members/{{ $member->image }}" width="200" height="200" id="avatar">
                    </div>
                    {!! Form::file('image', ['style' => 'display:none', 'class' => 'form-control', 'id' => 'image', 'accept' => 'image/jpeg,image/png,image/gif']) !!}
                    <a id="change_image" href="javascript:;">փոփոխել նկարը</a>
                @endif
            </div>    
            <div class="form-group">                
                {!! Form::submit('Պահպանել', ['class' => 'btn btn-success']) !!}
            </div>             
        {!! Form::close() !!}        
    </div>    
    <script>
        $(document).on('ready', function(){
            $('#change_image').on('click', function(){
                $('#change_image').hide();
                $('#image').show();
            })
            $('#image').on('change', function(){
                readURL(this);                               
            })

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.member_photo').show();
                        $('#avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        })
    </script>
@stop