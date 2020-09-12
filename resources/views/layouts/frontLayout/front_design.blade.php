<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title> @if(!empty($meta_title)){{ $meta_title }} @else BookFreak -Ecommerce  | Shop @endif</title>

    <!-- Description -->
    @if(!empty($meta_description)) <meta name="description" content="{{ $meta_description }}"> @endif

    <!-- Keyword -->
    @if(!empty($meta_keywords)) <meta name="keyword" content="{{ $meta_keywords }}">@endif
   
    <!-- Favicon  -->
    <link rel="icon" href="{{ asset('images/frontend_css/core-img/favicon.ico') }}">
    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ asset('css/frontend_css/core-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/easyzoom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/passtrength.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/themify-icons.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/frontend_css/regular_responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('css/frontend_css/regular_styles.css') }}">
    <!-- Responsive CSS -->
    <link href="{{ asset('css/frontend_css/responsive.css" rel="stylesheet') }}">
</head><!--/head-->

<body>
    <div id="wrapper">

	@include('layouts.frontLayout.front_header')
	
	@yield('content')
	
	@include('layouts.frontLayout.front_footer')

    </div>

    <script src="{{ asset('js/frontend_js/jquery/jquery-2.2.4.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/popper.min.js') }}"></script>
	<script src="{{ asset('js/frontend_js/active.js') }}"></script>
    <script src="{{ asset('js/frontend_js/plugins.js') }}"></script>
    <script src="{{ asset('js/frontend_js/main.js') }}"></script>
    <script src="{{ asset('js/frontend_js/jquery.validate.js') }}"></script>
    <script src="{{ asset('js/frontend_js/passtrength.js') }}"></script>
    <script src="{{ asset('js/frontend_js/easyzoom.js') }}"></script>
     <script src="{{ asset('js/frontend_js/bootstrap2.min.js') }}"></script>
   
     
</body>

</html>