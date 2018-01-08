<div id="base">
    <div class="container padding-vert-30">
        <div class="row">
            <!-- Thumbs Gallery -->
            <div class="col-md-3 margin-bottom-20">
                
                <h3 class="margin-bottom-10">{{ $global->getsetting('global_settings')->fc_title }}</h3>
                <?php $str = strip_tags($global->getsetting('global_settings')->fc_content);
                    $str = preg_replace('/\s+/', '', $str);
                 ?>
                @if((substr($str,0,1) == '[') && substr($str,-1) == ']')
                   @widget(substr($str,1,-1))
                @else
                {!! $global->getsetting('global_settings')->fc_content !!}
                @endif
                <div class="clearfix"></div>
            </div>
            <!-- End Thumbs Gallery -->
            <!-- Contact Details -->
            <div class="col-md-3 margin-bottom-20">
                <h3 class="margin-bottom-10">{{ $global->getsetting('global_settings')->sc_title }}</h3>
                {!! $global->getsetting('global_settings')->sc_content !!}
            </div>
            <!-- End Contact Details -->
            <!-- Sample Menu -->
            <div class="col-md-3 margin-bottom-20" >
                <h3 class="margin-bottom-10">{{ $global->getsetting('global_settings')->tc_title }}</h3>
                {!! $global->getsetting('global_settings')->tc_content !!}
                <div class="clearfix"></div>
            </div>
            <!-- End Sample Menu -->
            <!-- Disclaimer -->
            <div class="col-md-3 margin-bottom-20">
                <h3 class="margin-bottom-10">{{ $global->getsetting('global_settings')->fthc_title }}</h3>
                {!! $global->getsetting('global_settings')->fthc_content !!}
                <div class="clearfix"></div>
            </div>
            <!-- End Disclaimer -->
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<!-- Footer Menu -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div id="copyright" class="col-md-4">
                <p>(c) 2014 Your Copyright Info</p>
            </div>
            <div id="footermenu" class="col-md-8">
                <ul class="list-unstyled list-inline pull-right">
                    @foreach($pages->all() as $page )
                        @if(in_array($page->id,$global->getsetting('global_settings')->footer_menu_items))
                       <li>
                            <a href="{{ url('/') }}/{{ $page->id }}" target="_blank" >{{ $page->page_title }}</a>
                        </li>

                        @endif
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>