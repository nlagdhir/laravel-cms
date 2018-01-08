<!DOCTYPE HTML>
<html>
<head>
<title>Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />

<!-- Bootstrap Core CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('backend//css/style.css') }}" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="{{ asset('backend//css/lines.css') }}" rel='stylesheet' type='text/css' />
<link href="{{ asset('backend//css/font-awesome.css') }}" rel="stylesheet"> 
<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<!---//webfonts--->    
<!-- Nav CSS -->
<link href="{{ asset('backend//css/custom.css') }}" rel="stylesheet">
<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('backend//js/metisMenu.min.js') }}"></script>
<script src="{{ asset('backend//js/custom.js') }}"></script>
<!-- Graph JavaScript -->
<script src="{{ asset('backend//js/d3.v3.js') }}"></script>
<script src="{{ asset('backend//js/rickshaw.js') }}"></script>

<script src="{{ url('/') }}/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
<script>
    CKEDITOR.config.extraAllowedContent = true;
    CKEDITOR.dtd.$removeEmpty.span = 0;
    CKEDITOR.dtd.$removeEmpty.i = 0;
    CKEDITOR.config.allowedContent = true;
    CKEDITOR.config.extraAllowedContent = 'div(*)';
</script>

</head>
<body>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('dashboard') }}">Modern</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
	        		<a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="{{ asset('backend/images/1.png') }}"></a>
	        		<ul class="dropdown-menu">
						<li class="m_2"><a href="{{ url('logout') }}"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
			<div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/sliders') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Slider</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/posts') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Posts</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/pages') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Pages</a>
                        </li>
                        <li>
                            <a href="{{ url('admin/portfolio') }}"><i class="fa fa-dashboard fa-fw nav_icon"></i>Portfolio</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Videos<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                            	<li>
                                    <a href="{{ url('admin/videos/create') }}">Add Video</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/videos') }}">Videos</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Our Experts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/teams') }}">Experts</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/teams/create') }}">Add Experts</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/setting/experts') }}">Experts Settings</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-table nav_icon"></i>Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ url('admin/setting/homepage') }}">Homepage</a>
                                </li>
                                <li>
                                    <a href="{{ url('admin/setting/global') }}">Global</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        	<div class="graphs">
        		@yield('content')		
        	</div>
        </div>
      <!-- /#page-wrapper -->
   </div>
    <!-- /#wrapper -->
    <!-- Bootstrap Core JavaScript -->
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</body>
</html>
