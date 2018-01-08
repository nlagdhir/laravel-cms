<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title -->
    <title>Laravel Website</title>
    <!-- Meta -->
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <!-- Favicon -->
    <link href="favicon.html" rel="shortcut icon">
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/animate.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/font-awesome.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/nexus.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('front/assets/css/custom.css') }}" rel="stylesheet">
    <!-- Google Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Lato:400,300" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="pre_header" class="visible-lg"></div>
    @inject('pages','App\Page')
    @inject('global','App\Setting')

    <!-- === BEGIN HEADER === -->
    @include('partials.front.header')
    <!-- === END HEADER === -->
    
    <!-- === BEGIN CONTENT === -->
    @include('partials.front.content')
    <!-- === END CONTENT === -->

    <!-- === BEGIN FOOTER === -->
    @include('partials.front.footer')
    <!-- End Footer Menu -->
<!-- JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{ asset('front/assets/js/scripts.js') }}"></script>
<!-- Isotope - Portfolio Sorting -->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.isotope.js') }}" type="text/javascript"></script>
<!-- Mobile Menu - Slicknav -->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.slicknav.js') }}" type="text/javascript"></script>
<!-- Animate on Scroll-->
<script type="text/javascript" src="{{ asset('front/assets/js/jquery.visible.js') }}" charset="utf-8"></script>
<!-- Slimbox2-->
<script type="text/javascript" src="{{ asset('front/assets/js/slimbox2.js') }}" charset="utf-8"></script>
<!-- Modernizr -->
<script src="{{ asset('front/assets/js/modernizr.custom.js') }}" type="text/javascript"></script>
<!-- End JS -->
</body>
</html>
<!-- === END FOOTER === -->