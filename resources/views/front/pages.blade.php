@extends('layouts.app')

@section('main-content')
	@if($page->page_layout != '')
		@include('Templates.'.$page->page_layout,$page)
	@else
		<div class="row margin-vert-30">
			<div class="col-md-12">
				<h2>{{ $page->page_title }}</h2>
				<?php
					$str = strip_tags($page->page_content);
					$str = preg_replace('/\s+/', '', $str);
				?>
				@if((substr($str,0,1) == '[') && (substr($str,-1) == ']'))
					@widget(substr($str,1,-1))
				@else
					{!! $page->page_content !!}
				@endif
			</div>
		</div>
	@endif
@stop

