<div class="col-md-12">
	<div class="col-md-3">		
		<b>Առարկա</b>
	</div>
	<div class="col-md-3">
		<b>Անուն</b>
	</div>
	<div class="col-md-3">
		<b>Ազգանուն</b>
	</div>
	<hr>
	@foreach($teachers as $teacher)
		<div class="member">
			@include('admin.teachers.parts.item')
		</div>
	@endforeach
</div>