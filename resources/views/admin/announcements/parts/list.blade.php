@foreach($announcements as $announcement)
	<div class="member">
		@include('admin.announcements.parts.item')
	</div>
@endforeach