<!DOCTYPE html>
<!--[if IE 8]>         
	<html class="no-js lt-ie9" lang="en"> 
<![endif]-->
<!--[if gt IE 8]><!--> 
	<html class="no-js" lang="es"> 
<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
	  	<meta name="viewport" content="width=device-width" />
	  	<title>Foundation 4</title>

	  	<!-- CSS -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/app.css" />
	</head>
	<body>
		<!-- Header and Nav -->
  		<header>
  			<section class="banner">
  				<h1>LoGo</h1>
  			</section>
  			<div class="menu">Menu goes here - home - links - blah blah</div>
		</header>

		<div class="content">
			@yield('content')
 		</div>
		
		<!-- Footer -->

	  	<script src="{{URL::to('/')}}/js/jquery.js"></script>
	  	<script src="{{URL::to('/')}}/js/app.js"></script>
	</body>
</html> 
