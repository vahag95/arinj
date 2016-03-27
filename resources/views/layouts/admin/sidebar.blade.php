<ul class="nav navbar-nav side-nav">
    <li class="@if(Request::is('member*') || Request::is('teacher*')) active @endif">            
        <a href="javascript:;" data-toggle="collapse" data-target="#we"><i class="fa fa-fw fa-user"></i>Մենք <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="we" class="collapse @if(Request::is('member*') || Request::is('teacher*')) in @endif">
            <li class="@if(Request::is('member*')) active @endif">
                <a href="/members">Անձնակազմ</a>
            </li>
            <!--<li class="@if(Request::is('teacher*')) active @endif">
                <a href="/teachers">Ուսուցիչներ</a>
            </li>-->                
        </ul>
    </li>
    <!--<li class="@if(Request::is('abou*')) active @endif"">
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
    </li>-->        
    <li class="@if(Request::is('achievement*')) active @endif"">
        <a href="javascript:;" data-toggle="collapse" data-target="#achievements"><i class="fa fa-fw fa-bar-chart-o"></i>Մեր նվաճումները <i class="fa fa-fw fa-caret-down"></i></a>
        <ul id="achievements" class="collapse @if(Request::is('achievement*')) in @endif">
            <li class="@if(Request::is('achievements/universit*') || Request::is('achievements/edit-university')) active @endif">
                <a href="/achievements/university">Բուհ․ Ընդունելություններ</a>
            </li>
            <li class="@if(Request::is('achievements/olim*') || Request::is('achievements/edit-olimp')) active @endif">
                <a href="/achievements/olimp">Օլիմպիադաներ</a>
            </li>
            <li class="@if(Request::is('achievements/competitio*') || Request::is('achievements/edit-competition')) active @endif">
                <a href="/achievements/competition">Մրցույթներ</a>
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
            <li class="@if(Request::is('open-lesso*')) active @endif">
                <a href="/open-lessons">Բաց Դասեր</a>
            </li>
        </ul>
    </li>    
</ul>