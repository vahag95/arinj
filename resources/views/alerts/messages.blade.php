@if(session('success'))
	<div class="alert alert-success alert-dismissable">{{ session('success') }}</div>
@endif
@if(session('warning'))
	<div class="alert alert-warning alert-dismissable">{{ session('warning') }}</div>
@endif
@if(session('error'))
	<div class="alert alert-danger alert-dismissable">{{ session('error') }}</div>
@endif

@if ($errors->has())
	<div class="alert alert-danger" role="alert">
		@foreach ($errors->all() as $key => $error)
	 		<li>{{ $error }}</li>
	 	@endforeach
	</div>
@endif