<div class="col-md-5">
	{{ $announcement->title }}
</div>
<div class="col-md-4">
	{{ $announcement->created_at }}
</div>
<div class="col-md-3">
	<div class="col-md-6">
		<a href="/announcements/{{ $announcement->id }}/edit">փոփոխել</a>		
	</div>
	<div class="col-md-6">
		<a href="">հեռացնել</a>		
	</div>
</div>