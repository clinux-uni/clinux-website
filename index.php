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
    <div class="container">
        <?php require_once 'includes/header.php'; ?>
    </div>
</header>
<section id="pleyers-grid">
    <hgroup>
        <h2>Comunidad Linux UNI</h2>
        <h3>Bienvenido a la comunidad</h3>
    </hgroup>
    <ul>
        <?php $n = 1; for ($i = 1; $i <= 30; $i++) { ?>
        <li><a href="#" title="#"><img src="img/slide<?php echo $n; ?>_small.png" alt="Foto de persil aqui"></a></li>
        <?php $n++; if ($n == 9) { $n = 1; } } ?>
    </ul>
</section>
<section id="content" class="container">
    <section id="articles">
        <?php for ($i=1; $i <= 3; $i++) { ?>
        <article>
            <a href="#" title="#" class="img-container"><img src="img/pre_960.png" alt="Imagen de pruebaa"></a>
            <div>
                <h2><a href="#" title="#">Flisol 2012</a></h2>
                <time datetime="2001-05-15 19:00">28 Abril, 2012</time>
                <p>El Festival Latinoamericano de Instalación de Software Libre es el evento de software libre más importante en América Latina. En esta ocasión, se llevará a cabo el Sábado 28 de Abril del 2012, desde las 8:00 hasta las 3:00pm en la Universidad Centroamericana UCA.</p>
            </div>
        </article>
        <?php } ?>
    </section>
    <section id="top">
        <div id="authors">
            <h3>Top 5 Autores</h3>
            <ul>
                <li>
                    <a href="#" title="#" class="img-container"><img src="img/slide1_small.png" alt=""></a>
                    <h4><a href="#" title="#">Carlos Salda&ntilde;a</a></h4>
                </li>
                <li>
                    <a href="#" title="#" class="img-container"><img src="img/slide2_small.png" alt=""></a>
                    <h4><a href="#" title="#">Frederick Lozano</a></h4>
                </li>
                <li>
                    <a href="#" title="#" class="img-container"><img src="img/slide3_small.png" alt=""></a>
                    <h4><a href="#" title="#">Hosmel Quintana</a></h4>
                </li>
                <li>
                    <a href="#" title="#" class="img-container"><img src="img/slide4_small.png" alt=""></a>
                    <h4><a href="#" title="#">River Martinez</a></h4>
                </li>
                <li>
                    <a href="#" title="#" class="img-container"><img src="img/slide5_small.png" alt=""></a>
                    <h4><a href="#" title="#">Samuel Guti&eacute;rrez</a></h4>
                </li>
            </ul>
        </div>
        <div id="post">
            <h3>Top 5 Posts</h3>
            <ul>
                <?php for ($i=1; $i <= 5; $i++) { ?>
                <li>
                    <a href="#" title="#" class="img-container"><img src="img/slide1_small.png" alt=""></a>
                    <h4><a href="#" title="#">Titulo del post</a></h4>
                </li>
                <?php } ?>
            </ul>
        </div>
    </section>
</section>
<footer>
    <?php require_once 'includes/footer.php'; ?>
</footer>
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