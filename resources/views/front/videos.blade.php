@extends('layouts.app')

@section('main-content')
	<link href="//vjs.zencdn.net/5.4.6/video-js.min.css" rel="stylesheet">
	<script src="//vjs.zencdn.net/5.4.6/video.min.js"></script>
	<script type="text/javascript">
		var player = videojs('example_video_1');
			player.ready(function(){
				this.play();
			});
	</script>

	<div class="row margin-vert-30">
			<div class="col-md-9">
				<h2>Videos</h2>
				<ul class="all-videos">
				@foreach($videos as $video)
					<li>
						<div class="vid-title">{{ $video->title }}</div>
						<div class="vid-description">{{ $video->description }}</div>
						<div class="vid-content">

						<video id="example_video_{{ $video->id }}"  class="video-js vjs-default-skin" controls preload="auto" width="640" height="264" poster="http://video-js.zencoder.com/oceans-clip.png" data-setup="{'techOrder': ['html5', 'flash']}"> >
 <source src="{{ url('/') }}/upload/videos/{{ $video->video }}" type="video/mp4" />
 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>

							{{-- <video width="100%" controls>
						  		<source src="{{ url('/') }}/upload/videos/{{ $video->video }}" type="video/mp4">
						  		Your browser does not support HTML5 video.
							</video>	 --}}
						</div>
					</li>
				@endforeach
				</ul>
			</div>
			<div class="col-md-3">
				{{ Widget::SidebarRecentPost() }}
			</div>
		</div>
@stop
