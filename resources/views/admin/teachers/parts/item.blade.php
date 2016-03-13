<div class="col-md-3">		
	@if($teacher->subject !== "")
		{!! $teacher->subject['name'] !!}
	@endif
</div>
<div class="col-md-3">
	{!! $teacher->first_name !!}
</div>
<div class="col-md-3">
	{!! $teacher->last_name !!}
</div>
<div class="col-md-3">		
	<div class="col-md-6">
		<a href="teachers/{{ $teacher->id }}/edit">փոփոխել</a>
	</div>
	<div class="col-md-6">
		<a href="">հեռացնել</a>
	</div>
</div>	
