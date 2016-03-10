@extends('layouts.admin.layout')
@section('title')
    Ուսուցիչներ
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
                <li class="active">
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
