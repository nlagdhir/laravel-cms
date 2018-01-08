<div class="col-md-12">
<!-- Filter Buttons -->
<div class="portfolio-filter-container margin-top-20">
	<ul class="portfolio-filter">
		<li class="portfolio-filter-label label label-primary">
			filter by:
		</li>
		<li>
			<a href="#" class="portfolio-selected btn btn-default" data-filter="*">All</a>
		</li>
		<li>
			<a href="#" class="btn btn-default" data-filter=".code">Coding</a>
		</li>
		<li>
			<a href="#"  class="btn btn-default"data-filter=".design">Design</a>
		</li>
		<li>
			<a href="#"  class="btn btn-default"data-filter=".audio">Audio</a>
		</li>
		<li>
			<a href="#"  class="btn btn-default"data-filter=".video">Video</a>
		</li>
	</ul>
</div>
<!-- End Filter Buttons -->
</div>
<div class="portfolio-group col-md-12 margin-top-30 no-padding">
<div class="row">
	<!-- Portfolio Item -->
	@foreach($portfolios as $portfolio)
	<div class="portfolio-item col-md-4 video">
		<div class="image-hover">
			<a href="#">
				<figure>
					<img src="{{ url('/') }}/upload/portfolio/{{ $portfolio->project_thumb }}" alt="image1">
					<div class="overlay">
						<a class="expand" href="{{ url('/') }}/upload/portfolio/{{ $portfolio->project_thumb }}"></a>
					</div>
				</figure>
				<h3 class="margin-top-20"><a href="{{ $portfolio->project_url }}">{{ $portfolio->project_name }}</a></h3>
				<p class="margin-top-10">{!! $portfolio->project_content !!}</p>
			</a>
		</div>
		<div class="clearfix"></div>
	</div>
	@endforeach
	
	<!-- //Portfolio Item// -->
</div>
</div>