<?php
/*
Template Name: About Us
*/
?>
@inject('teams','App\Team')
@inject('global','App\Setting')
<div class="row margin-vert-30">
	<div class="col-md-12">
		<h2>{{ $page->page_title }}</h2>

		{!! $page->page_content !!}

		<!-- Our Experts -->
		<h2 class="margin-vert-20">Our Experts</h2>
		<div class="row margin-bottom-30">
			<div class="col-md-4">
				{!! $global->getsetting('experts_setting')->content !!}
				<?php $i=0; ?>
				@foreach($global->getsetting('experts_setting')->skills as $skill)
				<?php $i++ ?>
				@if($i%2!=0)
				<h3 class="progress-label">{{ $skill }} 
				@else
				<span class="pull-right">{{ $skill }}%</span></h3>
					<div class="progress progress-sm">
					<div class="progress-bar progress-bar-primary" role="progressbar" style="width: {{ $skill }}%">
					</div>
				</div>
				@endif
				@endforeach
			</div>
			<div class="col-md-8">
				<!-- Person Details -->
				@foreach($teams->get() as $team)
					<div class="col-md-4 person-details margin-bottom-30">
					<figure>
						<img src="{{ url('/') }}/upload/teams/{{ $team->thumb }}" alt="image1">
						<figcaption>
						<h3 class="margin-bottom-10">{{ $team->name }}<small> - {{ $team->designation }}</small></h3>
						<span>{{ $team->about }}</span>
						</figcaption>
						<ul class="list-inline person-details-icons">
						@foreach($teams->getsocial($team->social) as $key => $value)
							<li>
							@if($key == "'facebook_url'")
								<a target="_blank" href="{{ $value }}"><i class="fa-lg fa-facebook"></i></a>
								}
							@endif
							@if($key == "'linkedin_url'")
								<a target="_blank" href="{{ $value }}"><i class="fa-lg fa-linkedin"></i></a>
							@endif
							@if($key == "'google_url'")
								<a  target="_blank" href="{{ $value }}"><i class="fa-lg fa-google"></i></a>
							@endif
							@if($key == "'twitter_url'")
								<a  target="_blank" href="{{ $value }}"><i class="fa-lg fa-twitter"></i></a>
							@endif
							</li>
								
							
						@endforeach
						
							
						</ul>
					</figure>
				</div>
				@endforeach
				<!-- Person Details -->
				
			</div>
		</div>
		<hr class="margin-vert-30">
		<!-- End Our Experts -->
	</div>
</div>