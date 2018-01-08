@extends('layouts.app')

@section('main-content')
<div class="row margin-vert-30">
	<!-- Main Column -->
	<div class="col-md-9">
		<div class="blog-post">
			<div class="blog-item-header">
				<div class="blog-post-date pull-left">
					<span class="day">{{ $post->created_at->day }}</span>
					<span class="month">{{ $post->created_at->format('M') }}</span>
				</div>
				<h2>
				<a href="#">
					{{ $post->title }}
				</a>
				</h2>
			</div>
			<div class="blog-item">
				<div class="clearfix"></div>
				<div class="blog-post-body row margin-top-15">
					<div class="col-md-5">
						<img class="pull-left" src="{{ url('') }}/upload/posts/{{ $post->image }}" alt="image1">
					</div>
					
					
						<p>{!! $post->content !!}</p>
					
				</div>
			</div>
		</div>
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
							<a href="{{ url('blog/') }}/{{ $post->id  }}">
								<img width="35%" class="pull-left" src="{{ url('/') }}/upload/posts/{{ $post->image }}" alt="thumb1">
							</a>
							<a href="{{ url('blog/') }}/{{ $post->id  }}" class="posts-list-title">{{ $post->title }}</a>
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
		<!-- End Side Column -->
	</div>
</div>
@stop