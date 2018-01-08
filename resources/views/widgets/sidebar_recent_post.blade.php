<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Recent Posts</h3>
	</div>
	<div class="panel-body">
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
</div>