@extends('layouts.admin.layout')
@section('title')
	Ավելացնել Միջոցառում
@stop
@section('content')    
	@include('alerts.messages')    
    <div class="col-sm-8 col-sm-offset-2 col-md-offset-0">
    	<h1>Ավելացնել Միջոցառում</h1>
    </div>
    <div class="col-md-12">
    	<div class="col-md-10 col-md-offset-1">
            {!! Form::open(['url' => '/events', 'files' => true, 'method' => 'post']) !!}                
                <div class="form-group">
                    <label>Վերնագիր</label>
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    <label>Նկարագրություն</label>
                    {!! Form::text('description', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group images">
                    <input type="file" name="images[]" class="image_select" multiple>                                            
                </div>
                <div id="images_preview" class="row"></div>
                <div class="form-group">
                    <button type="button" class="btn btn-default" style="display:none" id="other_images">ավելացնել այլ նկարներ</button>                    
                </div>
                {!! Form::submit('Ավելացնել', ['class' => 'btn btn-success']) !!}                
            {!! Form::close() !!}
        </div>
    </div>    
    <script>
        $(document).on('ready', function(){
            $('#other_images').on('click', function(){                
                $('.images').append('<input type="file" name="images[]" class="image_select" multiple>');
            })
        })
        $(document).on('change',".image_select", function(){            
            $(this).hide();
            $('#other_images').show();        
            for(var i = 0; i < this.files.length ; i++){
                readURL( this.files[i] );
            }
        })            
        function readURL(file) {
            if (file) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    console.log( e.target.result );
                    $('#images_preview').append('<div class="col-md-4 single_image"><img src="'+ e.target.result +'" width="200" height="200"></div>');                    
                    // $('#avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(file);
            }
        }
    </script>
@stop
