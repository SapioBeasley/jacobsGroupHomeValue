<!doctype html>
<!--[if lt IE 7]>       <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>          <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>          <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->  <html class="no-js" lang=""> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>How Much is Your Home Worth</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/normalize.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/icomoon.css">
		<link rel="stylesheet" href="css/owl.theme.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/prettyPhoto.css">
		<link rel="stylesheet" href="css/main.css">
		<link rel="stylesheet" href="css/transitions.css">
		<link rel="stylesheet" href="css/color.css">
		<link rel="stylesheet" href="css/responsive.css">
		<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
	<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div id="wrapper" class="tg-haslayout">

		@yield('header')

		@yield('content')

	</div>
	<script src="js/vendor/jquery-library.js"></script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="js/map/jquery.gomap.js"></script>
	<script src="js/map/markerclusterer.min.js"></script>
	<script src="js/jquery.nicescroll.js"></script>
	<!-- <script src="js/appear.js"></script> -->
	<script src="js/main.js"></script>

	@yield('mapScript')
	</body>
</html>
