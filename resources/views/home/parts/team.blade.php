<section id="our-team">
	<div class="container">
		<div class="row text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">Անձնակազմ</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
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
								<img src="/images/members/{{ $members[$i]->image }}" alt="team member" width="200" height="200" />
								<h4>{!! $members[$i]->first_name !!} {!! $members[$i]->last_name !!}</h4>
								<b>{!! Lang::get("roles.".$members[$i]->role) !!}</b>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								<div class="socials">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					@endfor
				</div>
				<div class="row item">
					@for($i = 4; $i < count( $members ) ; $i++)
						<div class="col-sm-6 col-md-3">
							<div class="single-member">
								<img src="/images/members/{{ $members[$i]->image }}" alt="team member" width="200" height="200" />
								<h4>{!! $members[$i]->first_name !!} {!! $members[$i]->last_name !!}</h4>
								<b>{!! Lang::get("roles.".$members[$i]->role) !!}</b>
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod</p>
								<div class="socials">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
					@endfor
				</div>
			</div>
		</div>
	</div>
</section><!--/#Our-Team-->