<section id="our-team">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Անձնակազմ</h2>				
			</div>
		</div>
		<div id="team-carousel" class="carousel slide" data-interval="false">
			<a class="member-left" href="#team-carousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="member-right" href="#team-carousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			<div class="carousel-inner team-members">
				<div class="row item active">
					@for($i =0 ; $i<4; $i++)
						<div class="col-sm-6 col-md-3">
							<div class="single-member">
								<img src="https://s3-us-west-2.amazonaws.com/arinj/{{ $members[$i]->image }}" alt="team member" width="200" height="200" />
								<div class="member_name" style="height:65px">
									<h4>{!! $members[$i]->first_name !!} {!! $members[$i]->last_name !!}</h4>
									<span style="font-size: 10px">{!! $members[$i]->description !!}</span>
								</div>
								<b>{!! Lang::get("roles.".$members[$i]->role) !!}</b>								
							</div>
						</div>
					@endfor
				</div>
				<div class="row item">
					@for($i = 4; $i < count( $members ) ; $i++)
						<div class="col-sm-6 col-md-3">
							<div class="single-member">
								<img src="https://s3-us-west-2.amazonaws.com/arinj/{{ $members[$i]->image }}" alt="team member" width="200" height="200" />
								<div class="member_name" style="height:65px">
									<h4>{!! $members[$i]->first_name !!} {!! $members[$i]->last_name !!}</h4>									
								</div>
								<b>{!! Lang::get("roles.".$members[$i]->role) !!}</b>								
							</div>
						</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
</section><!--/#Our-Team-->