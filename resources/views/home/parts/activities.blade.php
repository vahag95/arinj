<section id="blog"> 
	<div class="container">
		<div class="row text-center clearfix">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Մեր Առօրյան</h2>			
			</div>
		</div> 
		<div class="row">
			@foreach($events as $event)
				<div class="col-sm-4">
					<div class="single-blog">
						<img src="https://s3-us-west-2.amazonaws.com/arinj{{ $event->images()->first()->image_url }}" alt="" height="232" />
						<div style="height:100px" class="about">
							<b><p style="height:60px">{{ $event->title }}</p></b>
							<ul class="post-meta">			
								<li>
									<i class="fa fa-clock-o"></i>
									<strong>Ավելացվել է՝ &nbsp;&nbsp;&nbsp;</strong>
									{{ $event->created_at }}
								</li>
							</ul>					
						</div>	
						<a href="/events/{{ $event->id }}" class="btn btn-primary">Ավելին</a>
					</div>					
				</div>
			@endforeach
		</div> 
	</div> 
</section> <!--/#blog-->