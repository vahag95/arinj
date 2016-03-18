@foreach($tours as $tour)
	@foreach($tour->images as $image)		
		<img src="https://s3-us-west-2.amazonaws.com/arinj{{ $image->image_url }}" alt="">
	@endforeach
@endforeach