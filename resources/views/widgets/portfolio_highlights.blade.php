<div class="thumbs-gallery">
    @foreach($portfolios as $portfolio)
        <a class="thumbBox" rel="lightbox-thumbs" href="{{ url('/') }}/upload/portfolio/{{ $portfolio->project_thumb }}">
        <img src="{{ url('/') }}/upload/portfolio/{{ $portfolio->project_thumb }}">
        <i></i></a>
    @endforeach
</div>