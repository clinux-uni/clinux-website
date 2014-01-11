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
	  	<link rel="shortcut icon" href="{{URL::to('/')}}/img/favicon.svg">
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
			          		<a class="titulo-menu" href="{{URL::to('/')}}" style="font-size:30px; margin-top:8px;">
			          			<img src="{{URL::to('/')}}/img/logo-head.png">
			          			CLINUX
			          		</a>
			          	</div>

			          	<!-- Menu -->
			          	<div class="colapso-menu">
			          		<!-- Barra de Menu -->
			          		<ul id = "hamburger" class = "men">
								<li><img src="{{URL::to('/')}}/img/hamburger.svg"/></li>
			          		</ul>
				            <ul id = "manubarra" class="barra">		
					            <li class="activo"><div class = "act"><a href="#"><img src="{{URL::to('/')}}/img/globe.svg"></a></div></li>
					            <li><div class="about"><a href="#about"><img src="{{URL::to('/')}}/img/about.svg"></a></div></li>
					            <li><div class="contact"><a href="{{URL::to('/')}}/site/msj"><img src="{{URL::to('/')}}/img/email.svg"></a></div></li>
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
