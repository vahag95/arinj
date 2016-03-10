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
		@include('admin.teachers.parts.item')
	@endforeach
</div>