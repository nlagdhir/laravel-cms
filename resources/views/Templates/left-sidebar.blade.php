<?php 
/* 
Template Name: Left Sidebar
*/
?>
<div class="row margin-vert-30">
		<!-- Side Column -->
		<div class="col-md-3">
			<!-- Recent Posts -->
				@widget('SidebarRecentPost')
			<!-- End recent Posts -->
			<!-- About -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">About</h3>
				</div>
				<div class="panel-body">
					Et harum quidem rerum facilis est et expedita distinctio lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero consectetur adipiscing elit magna. Sed et quam lacus. Fusce condimentum eleifend enim a feugiat.
				</div>
			</div>
				<!-- End About -->
		</div>
		<!-- End Side Column -->
		<!-- Main Column -->
		<div class="col-md-9">
			<!-- Main Content -->
			<h2>{{ $page->page_title }}</h2>
			{!! $page->page_content !!}
			<!-- End Main Content -->
		</div>
		<!-- End Main Column -->
</div>