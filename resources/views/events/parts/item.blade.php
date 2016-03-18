<div class="col-sm-4">
	<div class="single-blog">
		<img src="https://s3-us-west-2.amazonaws.com/arinj{{ $event->images()->first()->image_url }}" alt="" />
		<h2>{{ $event->title }}</h2>
		<ul class="post-meta">			
			<li>
				<i class="fa fa-clock-o"></i>
				<strong>Ավելացվել է՝ &nbsp;&nbsp;&nbsp;</strong>
				{{ $event->created_at }}
			</li>
		</ul>
		<div class="blog-content">
			<p>{{ $event->description }}</p>
		</div>
		<a href="/events/{{ $event->id }}" class="btn btn-primary">Ավելին</a>
	</div>					
</div>