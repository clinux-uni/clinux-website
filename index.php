<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title></title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="css/style.css">
<script src="js/libs/modernizr-2.0.6.min.js"></script>
</head>

<body>
<header>
    <?php require_once 'includes/header.php'; ?>
</header>
<div class="container">
<div id="content">
    <div class="left">
        <nav>
            <?php require_once 'includes/nav.php'; ?>
        </nav>
        <div id="logo-web">
            <a class="img-container"><img src="" alt=""></a>
            <p>Costrucci&oacute;n libre para la internet</p>
        </div>
    </div>
    <section id="articles">
        <article>
            <h2><a href="#" title="#">Flisol 2012</a></h2>
            <time datetime="2001-05-15 19:00">26 Abril, 2012</time>
            <a href="#" title="#" class="img-container"><img src="img/flisol_600.jpg" alt="Imagen de pruebaa"></a>
            <p>El Festival Latinoamericano de Instalación de Software Libre es el evento de software libre más importante en América Latina. En esta ocasión, se llevará a cabo el Sábado 28 de Abril del 2012, desde las 8:00 hasta las 3:00pm en la Universidad Centroamericana UCA.</p>
        </article>
    </section>
</div>
<footer>
    <?php require_once 'includes/footer.php'; ?>
</footer>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>
$(function() {
    var width = $(window).width();
    console.log(width);
});
</script>
<!--<script src="js/loads.js"></script>-->
</body>
</html>