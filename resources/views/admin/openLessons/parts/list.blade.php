@foreach($lessons as $lesson)
	<div class="member">
		@include('admin.openLessons.parts.item')
	</div>
@endforeach