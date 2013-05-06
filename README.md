CakePHP
=======

Esto es lo que necesitas:

1. Servidor web funcionando.
============================
Asumiremos que estás usando Apache, aunque las instrucciones para otros servidores son similares. Igual tendremos que ajustar un poco la configuración inicial, pero todos los pasos son sencillos. La mayor parte de nosotros podrá tener CakePHP funcionando sin tocar nada en su configuración.

	-> Descargar la última versión de CakePHP.
	------------------------------------------
	Para ello, visita la web del proyecto en github: https://github.com/cakephp/cakephp/tags y descargar/descomprimir la última versión de la rama 2.0
	También puedes clonar el repositorio usando git. git clone git://github.com/cakephp/cakephp.git

	Es buen momento para aprender algo sobre cómo funciona esta estructura de directorios: echa un vistazo a “Directorios en CakePHP”, Sección: Estructura de directorios de CakePHP.
	(http://book.cakephp.org/2.0/es/getting-started/cakephp-folder-structure.html)

	$/path_to_document_root
	    /app
	    /lib
	    /plugins
	    /vendors
	    .htaccess
	    index.php
	    README

2. Base de datos funcionando.
=============================
Usaremos MySQL en este tutorial. Necesitarás saber cómo crear una base de datos nueva. CakePHP se encargará del resto.

	-> Creando la base de datos.
	----------------------------
	Para efecctos practicos se esta utilizando MariaDB y PhpMyAdmin (alternativamente se puede usar MySQL WorkBench). Vamos a crear una nueva base de datos vacia de preferenncia con cotejamiento utf8-general. Para la pagina de la Comunidad Linux UNI - CLINUX llamaremos a la base de datos 'clinux_db'.

	-> Configurando la Base de Datos.
	---------------------------------
	Rápido y sencillo, vamos a decirle a CakePHP dónde está la Base de Datos y cómo conectarnos a ella. Probabmente ésta será la primera y última vez que lo hagas en cada proyecto.

	Hay un fichero de configuración preparado para que sólo tengas que copiarlo y modificarlo con tu propia configuración.
	Cambia el nombre del fichero '/app/Config/database.php.default' por '/app/Config/database.php' (hemos eliminado el ‘.default’ del final).
	Edita ahora este fichero y verás un array definido en la variable $default que contiene varios campos. Modifica esos campos para que se correspondan con tu configuración actual de acceso a la Base de Datos. Debería quedarte algo similar a esto:



Nivel básico de PHP. Si estás familiarizado con la programación orientada a objetos, mucho mejor. Aún así puedes seguir desarrollando con tu estilo procedimental si lo prefieres.

Conocimiento sobre patrón MVC. Puedes encontrar una definición rápida aquí: Entendiendo el Modelo - Vista - Controlador. No tengas miedo, sólo es media página.
(http://book.cakephp.org/2.0/es/cakephp-overview/understanding-model-view-controller.html)

