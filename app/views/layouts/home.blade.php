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
	  	<title>CLINUX</title>

	  	<!-- CSS -->
	  	<link rel="stylesheet" href="{{URL::to('/')}}/css/app.css" />
	</head>
	<body>
		<!-- Wrap all page content here -->
	    <div id="wrap">
			<!-- Cabecera and Barra de Navegacion -->
	  		<header>
	  			<!-- Bandera del Inicio / Cabecera -->
	  			<section class="bandera"></section>
	  			<!-- Barra de Navegacion -->
	  			<nav class="menu">
	  				<!-- Contenedor del Menu -->
			        <section class="contenedor">
			        	<!-- Titlulo de la Barra de Navegacion -->
			          	<div class="cabecera-menu">
			          		<a class="titulo-menu" href="{{URL::to('/')}}">CLINUX</a>
			          	</div>

			          	<!-- Menu -->
			          	<div class="colapso-menu">
			          		<!-- Barra de Menu -->
				            <ul class="barra">
					            <li class="activo"><a href="#">Home</a></li>
					            <li><a href="#about">About</a></li>
					            <li><a href="#contact">Contact</a></li>
				            </ul>
			          	</div>
			        </section>
			    </nav>
			</header>

			<section class="contenedor">
				@yield('content')
	 		</section>
		
		</div>

		<!-- Footer -->
	    <div id="footer">
	      	<div class="container">
	        	<p class="text-muted credit">Example courtesy <a href="http://martinbean.co.uk">Martin Bean</a> and <a href="http://ryanfait.com/sticky-footer/">Ryan Fait</a>.</p>
	      	</div>
	    </div>

	  	<script src="{{URL::to('/')}}/js/jquery.js"></script>
	  	<script src="{{URL::to('/')}}/js/app.js"></script>
	</body>
</html> 
