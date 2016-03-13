<ul class="nav navbar-nav side-nav">
    <li class="@if(Request::is('member*') || Request::is('teacher*')) active @endif">            
        <a href="javascript:;" data-toggle="collapse" data-target="#we"><i class="fa fa-fw fa-user"></i>Մենք <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="we" class="collapse @if(Request::is('member*') || Request::is('teacher*')) in @endif">
            <li class="@if(Request::is('member*')) active @endif">
                <a href="/members">Անձնակազմ</a>
            </li>
            <li class="@if(Request::is('teacher*')) active @endif">
                <a href="/teachers">Ուսուցիչներ</a>
            </li>                
        </ul>
    </li>
    <li class="@if(Request::is('abou*')) active @endif"">
        <a href="javascript:;" data-toggle="collapse" data-target="#about"><i class="fa fa-fw fa-bar-chart-o"></i>Մեր մասին <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="about" class="collapse @if(Request::is('abou*')) in @endif">
            <li class="@if(Request::is('about/school/elementary')) active @endif">
                <a href="/about/school/elementary">Տարրական</a>
            </li>
            <li class="@if(Request::is('about/school/middle')) active @endif">
                <a href="/about/school/middle">Միջին</a>
            </li>
            <li class="@if(Request::is('about/school/high')) active @endif">
                <a href="/about/school/high">Ավագ</a>
            </li>                
        </ul>
    </li>        
    <li class="">
        <a href="javascript:;" data-toggle="collapse" data-target="#achievements"><i class="fa fa-fw fa-bar-chart-o"></i>Մեր նվաճումները <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="achievements" class="collapse class="@if(Request::is('achievement*')) in @endif">
            <li>
                <a href="#">Բուհ․ Ընդունելություններ %</a>
            </li>
            <li>
                <a href="#">Օլիմպիադաներ</a>
            </li>                
        </ul>
    </li>
    <li class="@if(Request::is('announcement*') || Request::is('event*') || Request::is('tour*')) active @endif" >
        <a href="javascript:;" data-toggle="collapse" data-target="#life_at_school"><i class="fa fa-fw fa-arrows-v"></i> Կյանքը դպրոցում <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="life_at_school" class="collapse @if(Request::is('announcement*') || Request::is('event*') || Request::is('tour*')) in @endif">
            <li class="@if(Request::is('announcement*')) active @endif">
                <a href="/announcements">Հայտարարություններ</a>
            </li>
            <li class="@if(Request::is('event*')) active @endif">
                <a href="/events">Միջոցառումներ</a>
            </li>
            <li class="@if(Request::is('tour*')) active @endif">
                <a href="/tours">Շրջայցեր</a>
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