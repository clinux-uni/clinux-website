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
	  	<link rel="shortcut icon" href="{{URL::to('/')}}/img/favicon.png">
	</head>
	
	<body>
		<!-- Wrap all page content here -->
	    <section id="envoltura">
			<!-- Cabecera and Barra de Navegacion -->
	  		<header>
	  			<!-- Bandera del Inicio / Cabecera -->
	  			<div class="bandera"></div>
	  			<!-- Barra de Navegacion -->
	  			<nav class="menu">
	  				<!-- Contenedor del Menu -->
			        <div class="contenedor">
			        	<!-- Titlulo de la Barra de Navegacion -->
			          	<div class="cabecera-menu">
			          		<a class="titulo-menu" href="{{URL::to('/')}}"><img src="{{URL::to('/')}}/img/3d-view.svg"></a>
			          	</div>

			          	<!-- Menu -->
			          	<div class="colapso-menu">
			          		<!-- Barra de Menu -->
				            <ul class="barra">
					            <li class="activo"><a href="#"><img src="{{URL::to('/')}}/img/globe.svg"></a></li>
					            <li><a href="#about"><img src="{{URL::to('/')}}/img/about.svg"></a></li>
					            <li><a href="#contact"><img src="{{URL::to('/')}}/img/email.svg"></a></li>
				            </ul>
			          	</div>
			        </div>
			    </nav>
			</header>

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
