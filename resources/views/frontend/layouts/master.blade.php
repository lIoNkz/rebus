<!DOCTYPE html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="/css/swiper.min.css" rel="stylesheet">
	<link href="/css/dark.min.css" rel="stylesheet">
	<link href="/css/font-icons.min.css" rel="stylesheet">
	<link href="/css/animate.min.css" rel="stylesheet">
	<link href="/css/magnific-popup.min.css" rel="stylesheet">
	<link href="/css/bs-filestyle.min.css" rel="stylesheet">
	<link href="/css/jquery.auto-complete.min.css" rel="stylesheet">
	<link href="/css/rebus.min.css" rel="stylesheet">
	<link href="/css/bootstrap.min.css" rel="stylesheet">
	<link href="/css/vacancies.min.css" rel="stylesheet">
	<link href="/css/fillform.min.css" rel="stylesheet">
	<link href="/css/main.css" rel="stylesheet">
	<link href="/css/responsive.min.css" rel="stylesheet">
	@yield('head')
</head>
<body class="stretched no-transition" data-loader="4" data-loader-color="#78bb38">


<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">


@include('frontend.partials._header')

@yield('content')

@include('frontend.partials._footer')

</div><!-- #wrapper end -->

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up noradius"></div>


<script src="/js/jquery.min.js"></script>
<script src="/js/jquery-ui.min.js"></script>
<script src="/js/plugins.min.js"></script>
<script src="/js/functions.min.js"></script>
<script src="/js/bs-filestyle.min.js"></script>
<script src="/js/activeForm.min.js"></script>
<script src="/js/jquery.auto-complete.min.js"></script>
<script src="/js/script.min.js"></script>
<script src="/js/fillform.min.js"></script>
@yield('scripts')
</body>
</html>
