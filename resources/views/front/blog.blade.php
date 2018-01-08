@extends('layouts.app')

@section('main-content')
<div class="row margin-vert-30">
	<!-- Main Column -->
	<div class="col-md-9">
		<!-- Blog Post -->
		@foreach($posts as $post)
			<div class="blog-post padding-bottom-20">
			<!-- Blog Item Header -->
			<div class="blog-item-header">
				<!-- Date -->
				<div class="blog-post-date pull-left">
					<span class="day">{{ $post->created_at->day }}</span>
					<span class="month">{{ $post->created_at->format('M')  }}</span>
				</div>
				<!-- End Date -->
				<!-- Title -->
				<h2>
				<a href="{{ url('/blog/') }}/{{ $post->id }}">{{ $post->title }}</a>
				</h2>
				<div class="clearfix"></div>
				<!-- End Title -->
			</div>
			<!-- End Blog Item Header -->
			<!-- Blog Item Body -->
			<div class="blog">
				<div class="clearfix"></div>
				<div class="blog-post-body row margin-top-15">
					<div class="col-md-5">
						<img class="pull-left" src="{{ url('/') }}/upload/posts/{{ $post->image }}" alt="thumb1">
					</div>
					{!! substr($post->content, 0,250) !!}
					<!-- Read More -->
						<a href="{{ url('/blog/') }}/{{ $post->id }}" class="btn btn-primary">
							Read More <i class="icon-chevron-right readmore-icon"></i>
						</a>
						<!-- End Read More -->
				</div>
			</div>
			<!-- End Blog Item Body -->
		</div>
		@endforeach
		{!! $posts->links() !!}
	</div>
	<!-- End Main Column -->
	<!-- Side Column -->
	<div class="col-md-3">
		<!-- Blog Tags -->
		{{-- <div class="blog-tags">
			<h3>Tags</h3>
			<ul class="blog-tags">
				<li><a href="#" class="blog-tag">HTML</a></li>
				<li><a href="#" class="blog-tag">CSS</a></li>
				<li><a href="#" class="blog-tag">JavaScript</a></li>
				<li><a href="#" class="blog-tag">jQuery</a></li>
				<li><a href="#" class="blog-tag">PHP</a></li>
				<li><a href="#" class="blog-tag">Ruby</a></li>
				<li><a href="#" class="blog-tag">CoffeeScript</a></li>
				<li><a href="#" class="blog-tag">Grunt</a></li>
				<li><a href="#" class="blog-tag">Bootstrap</a></li>
				<li><a href="#" class="blog-tag">HTML5</a></li>
			</ul>	
		</div> --}}
		<!-- End Blog Tags -->
		<!-- Recent Posts -->
		<div class="recent-posts">
			<h3>Recent Posts</h3>
			<ul class="posts-list margin-top-10">
				@foreach($recentPosts as $post)
					<li>
						<div class="recent-post">
							<a href="{{ url('blog') }}/{{ $post->id }}">
								<img width="35%" class="pull-left" src="{{ url('/') }}/upload/posts/{{ $post->image }}" alt="thumb1">
							</a>
							<a href="{{ url('blog') }}/{{ $post->id }}" class="posts-list-title">{{ $post->title }}</a>
							<br>
							<span class="recent-post-date">
							{{ $post->created_at->formatLocalized('%d %B %Y')  }}
							</span>
						</div>
						<div class="clearfix"></div>
					</li>
				@endforeach
			</ul>
		</div>
			<!-- End Recent Posts -->
	</div>
</div>
	
@stop