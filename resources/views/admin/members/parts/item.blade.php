<div class="member">
	<div class="col-md-3">		
		{!! Lang::get("roles.$member->role") !!}
	</div>
	<div class="col-md-3">
		{!! $member->first_name !!}
	</div>
	<div class="col-md-3">
		{!! $member->last_name !!}
	</div>
	<div class="col-md-3">		
		<div class="col-md-6">
			<a href="members/{{ $member->id }}/edit">փոփոխել</a>
		</div>
		<div class="col-md-6">
			<a href="">ջնջել</a>
		</div>
	</div>	
</div>