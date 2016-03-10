@extends('layouts.layout')
@section('content')
	<section id="contact">
		<div class="container">
			<div class="row text-center clearfix">
				<div class="col-sm-8 col-sm-offset-2">
					<div class="contact-heading">
						<h2 class="title-one">Կապնվեք Մեզ Հետ</h2>
						<p>
							Այստեղ կարոք եք հայտնել ձեր կարծիքը կամ առաջարկը<br>
							Դրանք շատ կարևոր են մեզ համար
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="contact-details">
				<div class="pattern"></div>
				<div class="row text-center clearfix">
					<div class="col-sm-6">
						<div class="contact-address"><address><p><span>Devs</span>Cluster</p><strong>36 North Kafrul<br>Dhaka Cantonment Area<br> Dhaka-1206, Bangladesh</strong><br><small>( Lorem ipsum dolor sit amet, consectetuer adipiscing elit )</small></address>
							<div class="social-icons">
								<a href="https://www.facebook.com/%D4%B1%D5%BC%D5%AB%D5%B6%D5%BB%D5%AB-%D4%BF%D4%BE%D5%A1%D5%BC%D5%B8%D6%82%D5%AF%D5%B5%D5%A1%D5%B6%D5%AB-%D5%A1%D5%B6%D5%BE%D5%A1%D5%B6-%D5%B4%D5%AB%D5%BB%D5%B6%D5%A1%D5%AF%D5%A1%D6%80%D5%A3-%D5%A4%D5%BA%D6%80%D5%B8%D6%81-1589416494626145"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a><a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
					<div class="col-sm-6"> 
						<div id="contact-form-section">
							<div class="status alert alert-success" style="display: none"></div>
							<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
								<div class="form-group">
									<input type="text" name="name" class="form-control name-field" required="required" placeholder="Ձեր անունը">
								</div>
								<div class="form-group">
									<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Էլ․ փոստ">
								</div> 
								<div class="form-group">
									<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Տեքստ"></textarea>
								</div> 
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Ուղարկել</button>
								</div>
							</form> 
						</div>
					</div>
				</div>
			</div>
		</div> 
	</section> <!--/#contact-->
@stop