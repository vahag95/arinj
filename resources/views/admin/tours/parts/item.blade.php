<div class="col-md-5">
	{{ $tour->title }}
</div>
<div class="col-md-4">
	{{ $tour->created_at }}
</div>
<div class="col-md-3 center">
	<div class="col-md-6" style="text-align: center">
		{{ $tour->images()->count() }}		
	</div>
	<div class="col-md-6">
		<a href="#" data-toggle="modal" data-target="#removeTour{{ $tour->id }}">
		  Հեռացնել
		</a>
		<a href=""></a>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="removeTour{{ $tour->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Միջոցառման հեռացում</h4>
			</div>
			<div class="modal-body">
				{!! Form::open(['url' => '/tours/'.$tour->id, 'method' => 'delete']) !!}
				Իրո՞ք ցանկանում եք ջնջել այս միջոցառումը։Այն այլևս հնարավոր չի լինի ետ բերել։				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Չեղարկել</button>
				<button type="submit" class="btn btn-primary">Հաստատել</button>
			</div>
				{!! Form::close() !!}			
		</div>
	</div>
</div>