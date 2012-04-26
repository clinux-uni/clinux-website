<h1><a href="./" title="Inicio">Clinux</a></h1>
<nav>
    <ul>
        <li><a href="#" title="#">Inicio</a></li>
        <li><a href="#" title="#">Musica</a></li>
        <li><a href="#" title="#">Noticias</a></li>
        <li><a href="#" title="#">Categor&iacute;as</a>
            <ul>
                <?php for ($i = 1; $i <= 8; $i++) { ?>
                <li><a href="#" title="#">Categor&iacute;a <?php echo $i; ?></a></li>
                <?php } ?>
            </ul>
        </li>
    </ul>
</nav>