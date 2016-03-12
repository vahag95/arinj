@extends('layouts.admin.layout')
@section('title')
    Ուսուցիչներ
@stop
@section('content')	
    <div class="col-md-12">
        <h2>Ուսուցիչներ</h2>
        <a class="btn btn-success pull-right" href="/teachers/create">Ավելացնել</a>
    </div>
    @include('admin.teachers.parts.list')        
    <script type="text/javascript">
        $(document).on('ready', function(){
            $('#teachers').DataTable();
        })
    </script>
@stop
