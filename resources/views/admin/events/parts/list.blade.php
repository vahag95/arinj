@foreach($events as $event)
	<div class="member">
		@include('admin.events.parts.item')
	</div>
@endforeach