<div id="header" class="container">
    <div class="row">
        <!-- Logo -->
        <div class="logo">
            <a href="{{ url('/') }}" title="">
                <img src="{{ asset('front/assets/img/logo.png') }}" alt="Logo" />
            </a>
        </div>
        <!-- End Logo -->
        <!-- Top Menu -->
        <div class="col-md-12 margin-top-30">
            <div id="hornav" class="pull-right visible-lg">
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/blog') }}">Blog</a></li>
                    <li><a href="{{ url('/videos') }}">Videos</a></li>
                    @foreach($pages->all() as $page )
                    @if(in_array($page->id,$global->getsetting('global_settings')->menu_items))
                    <li><a href="{{ url('/') }}/{{ $page->id }}">{{ $page->page_title }}</a></li>
                    @endif
                    @endforeach
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
        <div class="clear"></div>
            <!-- End Top Menu -->
    </div>
</div>
