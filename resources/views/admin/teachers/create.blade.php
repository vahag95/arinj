@extends('layouts.admin.layout')
@section('title')
    Ադմին
@stop
@section('content')
    @include('alerts.messages')    
    <div class="col-md-12 teacher_edit_header">
        <h2>Ավելացնել ուսուցիչ</h2>
    </div>
    <div class="col-md-6 col-md-offset-2">
        {!! Form::open([ 'url' => '/teachers/', 'method' => 'post', 'enctype' => 'multipart/form-data', 'id' => 'teacher_edit']) !!}
            <div class="form-group">
                <label>Անուն</label>
                {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label>Ազգանուն</label>
                {!! Form::text('last_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label>Առարկա</label>
                {!! Form::select('subject_id', $subjects, null,['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                <label>Նկար</label>                                
                <div class="teacher_photo" style="display:none">
                    <img src="" width="200" height="200" id="avatar">
                </div>
                {!! Form::file('image', ['class' => 'form-control', 'id' => 'image', 'accept' => 'image/jpeg,image/png,image/gif']) !!}                
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
                        $('.teacher_photo').show();                    
                        $('#avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }
        })
    </script>
@stop
s