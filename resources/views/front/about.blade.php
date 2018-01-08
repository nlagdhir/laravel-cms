@extends('layouts.app')

@section('main-content')
<div class="row margin-vert-30">
	<div class="col-md-12">
		<h2>About Us</h2>
		<div class="row">
			<div class="col-md-6">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, laboriosam, quod odit quo quos itaque repellat quaerat a ad alias. Vel, nostrum id ab velit veritatis consequatur fugit sequi esse.</p>
				<div class="row">
					<div class="col-sm-3">
						<span class="fa-stack fa-2x margin-vert-30 margin-horiz-40">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-sm-9">
						<h3 class="margin-vert-10">Responsive Layout</h3>
						<p>Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Aliquam dictum nulla eu varius porta. Maecenas congue dui id posuere fermentum.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-3">
						<span class="fa-stack fa-2x margin-vert-30 margin-horiz-40">
						<i class="fa fa-circle fa-stack-2x"></i>
						<i class="fa fa-flag fa-stack-1x fa-inverse"></i>
						</span>
					</div>
					<div class="col-sm-9">
						<h3 class="margin-vert-10">Responsive Layout</h3>
						<p>Lorem Ipsum is simply dummy text of Lorem the printing and typesettings. Aliquam dictum nulla eu varius porta. Maecenas congue dui id posuere fermentum.</p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Carousel -->
				<div id="carousel-example-1" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-1" data-slide-to="1"></li>
						<li data-target="#carousel-example-1" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<img src="{{ asset('front/assets/img/portfolio/image6.jpg') }}">
						</div>
						<div class="item">
							<img src="{{ asset('front/assets/img/portfolio/image7.jpg') }}">
						</div>
						<div class="item">
							<img src="{{ asset('front/assets/img/portfolio/image12.jpg') }}">
						</div>
					</div>
					<!-- Controls -->
					<a class="left carousel-control" href="#carousel-example-1" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#carousel-example-1" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<!-- End Carousel -->
			</div>
		</div>
		<hr class="margin-vert-40">
		<!-- Our Experts -->
		<h2 class="margin-vert-20">Our Experts</h2>
		<div class="row margin-bottom-30">
			<div class="col-md-4">
				<p>Commodo id natoque malesuada sollicitudin elit suscipit. Curae suspendisse mauris posuere accumsan massa posuere lacus convallis tellus interdum. Amet nullam fringilla nibh nulla convallis ut venenatis purus lobortis.</p>
				<p class="margin-bottom-30">Sed fringilla sem sed massa ullamcorper, vitae rutrum justo sodales. Cras sed iaculis enim. Sed aliquet viverra nisl a tristique. Curabitur vitae mauris sem. Pellentesque iaculis nibh leo, mattis aliquet arcu tincidunt at.</p>
				<h3 class="progress-label">Graphic Design <span class="pull-right">92%</span></h3>
				<div class="progress progress-sm">
					<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 90%">
					</div>
				</div>
				<h3 class="progress-label">Marketing <span class="pull-right">82%</span></h3>
				<div class="progress progress-sm">
					<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 82%">
					</div>
				</div>
				<h3 class="progress-label">SEO <span class="pull-right">74%</span></h3>
				<div class="progress progress-sm">
					<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 74%">
					</div>
				</div>
				<h3 class="progress-label">Programming <span class="pull-right">78%</span></h3>
				<div class="progress progress-sm">
					<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 78%">
					</div>
				</div>
				<h3 class="progress-label">PHP <span class="pull-right">88%</span></h3>
				<div class="progress progress-sm">
					<div class="progress-bar progress-bar-primary" role="progressbar" style="width: 88%">
					</div>
				</div>
			</div>
			<div class="col-md-8">
				<!-- Person Details -->
				<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ asset('front/assets/img/theteam/image1.jpg') }}" alt="image1">
						<figcaption>
						<h3 class="margin-bottom-10">April<small> - Programmer</small></h3>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
							<li><a href="#"><i class="fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-google-plus"></i></a></li>
						</ul>
					</figure>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Person Details -->
				<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ asset('front/assets/img/theteam/image2.jpg') }}" alt="image2">
						<figcaption>
						<h3 class="margin-bottom-10">Simon<small> - Sales Assistant</small></h3>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
							<li><a href="#"><i class="fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-google-plus"></i></a></li>
						</ul>
					</figure>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Person Details -->
				<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ asset('front/assets/img/theteam/image3.jpg') }}" alt="image3">
						<figcaption>
						<h3 class="margin-bottom-10">Victoria<small> - Support</small></h3>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
							<li><a href="#"><i class="fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-google-plus"></i></a></li>
						</ul>
					</figure>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Person Details -->
				<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ asset('front/assets/img/theteam/image4.jpg') }}" alt="image4">
						<figcaption>
						<h3 class="margin-bottom-10">Chris<small> - Graphic Design</small></h3>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
							<li><a href="#"><i class="fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-google-plus"></i></a></li>
						</ul>
					</figure>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Person Details -->
				<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ asset('front/assets/img/theteam/image5.jpg') }}" alt="image5">
						<figcaption>
						<h3 class="margin-bottom-10">John<small> - Public Relations</small></h3>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
							<li><a href="#"><i class="fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-google-plus"></i></a></li>
						</ul>
					</figure>
				</div>
				<!-- //Portfolio Item// -->
				<!-- Person Details -->
				<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ asset('front/assets/img/theteam/image6.jpg') }}" alt="image6">
						<figcaption>
						<h3 class="margin-bottom-10">Grace<small> - Accounting</small></h3>
						<span>Nullam id dolor id nibh ultricies vehicula ut id elit.</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
							<li><a href="#"><i class="fa-lg fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa-lg fa-google-plus"></i></a></li>
						</ul>
					</figure>
				</div>
				<!-- //Portfolio Item// -->
			</div>
		</div>
		<hr class="margin-vert-30">
		<!-- End Our Experts -->
	</div>
</div>
@stop