@extends('layouts.app')

@section('above-slider-quote')
<div class="row margin-top-30">
    <div class="col-md-12 text-center">
        <h2 class"text-center">{{ $pagesettings->header_title }}</h2>
        <p class"text-center">{{ $pagesettings->header_content }}</p>
    </div>
</div>
@stop

@section('home-slider')
<div class="row margin-top-10">
    <!-- Carousel Slideshow -->
    <div id="carousel-example" class="carousel slide" data-ride="carousel">
        <!-- Carousel Indicators -->
        <ol class="carousel-indicators">
        <?php $i=0; $active = ''; ?>
        @if($i==0)
        <?php $active = 'active' ?>
        @else
        <?php $active = '' ?>
        @endif
        @foreach($sliders as $slider)
            <li data-target="#carousel-example" data-slide-to="{{ $i }}" class="{{ $active }}"></li>
        <?php $i++; ?>
        @endforeach
        </ol>

        
        <!-- End Carousel Indicators -->
        <!-- Carousel Images -->
        <div class="carousel-inner">
            <?php $i=0; $active = ''; ?>
            
            @foreach($sliders as $slider)

            @if($i==0)
            <?php $active = 'active' ?>
            @else
            <?php $active = '' ?>
            @endif

            <div class="item {{ $active }}">
                <img src="{{ url('/') }}/upload/sliders/{{ $slider->image }}">
                <div class="carousel-caption">
                    <h3>Chania</h3>
                    <p>{{ $slider->content }}</p>
                </div>
            </div>
            <?php $i++; ?>
            @endforeach
        </div>
        <!-- End Carousel Images -->
        <!-- Carousel Controls -->
        <a class="left carousel-control" href="#carousel-example" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
        <!-- End Carousel Controls -->
    </div>
    <!-- End Carousel Slideshow -->
</div>
@stop

@section('main-content')
<!-- CONTENT BELOW SLIDER -->
<div class="row margin-vert-30">
    
    <!-- Main Text -->
    <div class="col-md-9">
        <h2>{{ $pagecontent->page_title }}</h2>
        {!! $pagecontent->page_content !!}
        <a class="btn btn-default" href="{{ url('/about') }}">Read more
            <i class="fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Main Text -->
    <!-- Side Column -->
    <div class="col-md-3">
        <h3 class="margin-bottom-10">Sample Menu</h3>
        <ul class="menu">
            @foreach($data = explode(',',$pagesettings->sidebar_links) as $link)
            <?php $linkdata = explode("|", $link) ?>
                <li>
                    <a class="fa-angle-right" href="{{ $linkdata[1] }}" >{{ $linkdata[0] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- End Side Column -->
</div>
<!-- END CONTENT BELOW SLIDER -->

<!-- PORTFOLIO -->
<div class="row">
    <!-- Portfolio -->
    @widget('RecentPosts')
    <!-- End Portfolio -->
</div>
<!-- END PORTFOLIO -->

<div class="row">
    <h2 class="text-center margin-top-10">{{ $pagesettings->bottom_header }}</h2>
    <p class="text-center margin-bottom-30">{{ $pagesettings->bottom_content }}</p>
</div>
@stop

