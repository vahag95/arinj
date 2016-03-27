<section id="portfolio">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Պատկերասրահ</h2>				
			</div>
		</div>
		<ul class="portfolio-filter text-center">
			<li><a class="btn btn-default active" href="#" data-filter="*">Բոլորը</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".event">Միջոցառումներ</a></li>
			<li><a class="btn btn-default" href="#" data-filter=".tour">Շրջայցեր</a></li>			
		</ul><!--/#portfolio-filter-->
		<div class="portfolio-items hover15 column">
			@for($i = 0; $i<3; $i++)
				<div class="col-sm-3 col-xs-12 portfolio-item all">
					<div class="">
						<div class="portfolio-image">
							<figure><img src="https://s3-us-west-2.amazonaws.com/arinj{{ $gallery_open_lessons[$i] }}" width="100%" height="225" /></figure>						
						</div>					
					</div>
				</div>				
			@endfor
			@for($i = 0; $i<3; $i++)
				<div class="col-sm-3 col-xs-12 portfolio-item event">
					<div class="">
						<div class="portfolio-image">
							<figure><img src="https://s3-us-west-2.amazonaws.com/arinj{{ $gallery_events[$i] }}" width="100%" height="225" /></figure>						
						</div>					
					</div>
				</div>				
			@endfor
			@for($i = 0; $i<3; $i++)
				<div class="col-sm-3 col-xs-12 portfolio-item tour">
					<div class="">
						<div class="portfolio-image">
							<figure><img src="https://s3-us-west-2.amazonaws.com/arinj{{ $gallery_tours[$i] }}" width="100%" height="225" /></figure>						
						</div>					
					</div>
				</div>				
			@endfor
			@for($i = 3; $i < count($gallery_events); $i++)
				<div class="col-sm-3 col-xs-12 portfolio-item event">
					<div class="">
						<div class="portfolio-image">
							<figure><img src="https://s3-us-west-2.amazonaws.com/arinj{{ $gallery_events[$i] }}" width="100%" height="225" /></figure>						
						</div>					
					</div>
				</div>				
			@endfor
			@for($i = 3; $i<count($gallery_tours); $i++)
				<div class="col-sm-3 col-xs-12 portfolio-item tour">
					<div class="">
						<div class="portfolio-image">
							<figure><img src="https://s3-us-west-2.amazonaws.com/arinj{{ $gallery_tours[$i] }}" width="100%" height="225" /></figure>						
						</div>					
					</div>
				</div>				
			@endfor
			@for($i = 3; $i<count($gallery_open_lessons); $i++)
				<div class="col-sm-3 col-xs-12 portfolio-item all">
					<div class="">
						<div class="portfolio-image">
							<figure><img src="https://s3-us-west-2.amazonaws.com/arinj{{ $gallery_open_lessons[$i] }}" width="100%" height="225" /></figure>						
						</div>					
					</div>
				</div>				
			@endfor					
		</div>
	</div> 
</section> <!--/#portfolio-->