@foreach($tours as $tour)
	<div class="member">
		@include('admin.tours.parts.item')
	</div>
@endforeach