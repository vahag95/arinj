<div class="col-md-12">
	<div class="col-md-3">		
		<b>Պաշտոնը</b>
	</div>
	<div class="col-md-3">
		<b>Անուն</b>
	</div>
	<div class="col-md-3">
		<b>Ազգանուն</b>
	</div>
	<hr>
	@foreach($members as $member)
		@include('admin.members.parts.item')
	@endforeach
</div>