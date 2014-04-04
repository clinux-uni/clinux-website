<!DOCTYPE html>
<!--[if IE 8]>         
	<html class="no-js lt-ie9" lang="en"> 
<![endif]-->
<!--[if gt IE 8]><!--> 
	<html class="no-js" lang="es"> 
<!--<![endif]-->

	<head>
		<meta charset="utf-8" />
	  	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	  	<title>CLINUX</title>

	  	<!-- FONT -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/font.css" /> 

	  	<!-- CSS -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/app.css" />
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/less.css" />
	  	
	  	<!-- FAVICON -->
	  	<link rel="shortcut icon" href="{{URL::to('/')}}/img/favicon.png" />
	</head>
	
	<body>

		<section class="contenedor">
			
			@yield('content')
			
 		</section>
		
		</section>

		<!-- Footer -->
	    <section id="alpie" style="display:none;">
	      	<div class="contenedor">
	        	<p class="texto-callado creditos">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
	      	</div>
	    </section>

	  	<script src="{{URL::to('/')}}/js/jquery.js"></script>
	  	<script src="{{URL::to('/')}}/js/app.js"></script>
	</body>
</html> 