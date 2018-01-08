@foreach($posts as $post)
<div class="portfolio-item col-sm-4 animate fadeIn">
    <div class="image-hover">
        <a href="#">
            <figure>
                <img src="{{ url('/') }}/upload/posts/{{ $post->image }}" alt="image1">
                <div class="overlay">
                    <a class="expand" href="{{ url('/') }}/upload/posts/{{ $post->image }}">Image Link</a>
                </div>
            </figure>
            <h3 class="margin-top-20">{{ $post->title }}</h3>
            <p class="margin-top-10 margin-bottom-20">{!! substr($post->content, 0,200) !!}</p>
            <div class="btn btn-default">
                <a class="info" href="{{ url('/blog/') }}/{{ $post->id }}">Read more</a>
            </div>
        </a>
    </div>
</div>
@endforeach
