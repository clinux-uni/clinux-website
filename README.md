CakePHP
=======

Esto es lo que necesitas:

========================================================
--------------------------------------------------------

1. Servidor web funcionando.
============================
Asumiremos que estás usando Apache, aunque las instrucciones para otros servidores son similares. Igual tendremos que ajustar un poco la configuración inicial, pero todos los pasos son sencillos. La mayor parte de nosotros podrá tener CakePHP funcionando sin tocar nada en su configuración.

1.1 Descargar la última versión de CakePHP.
-------------------------------------------
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

2.1 Creando la base de datos.
-----------------------------
Para efecctos practicos se esta utilizando MariaDB y PhpMyAdmin (alternativamente se puede usar MySQL WorkBench). Vamos a crear una nueva base de datos vacia de preferenncia con cotejamiento utf8-general. Para la pagina de la Comunidad Linux UNI - CLINUX llamaremos a la base de datos 'clinux_db'.

2.2 Configurando la Base de Datos.
----------------------------------
Rápido y sencillo, vamos a decirle a CakePHP dónde está la Base de Datos y cómo conectarnos a ella. Probabmente ésta será la primera y última vez que lo hagas en cada proyecto. Hay un fichero de configuración preparado para que sólo tengas que copiarlo y modificarlo con tu propia configuración.

Cambia el nombre del fichero '/app/Config/database.php.default' por '/app/Config/database.php' (hemos eliminado el ‘.default’ del final).
Edita ahora este fichero y verás un array definido en la variable $default que contiene varios campos. Modifica esos campos para que se correspondan con tu configuración actual de acceso a la Base de Datos. Debería quedarte algo similar a esto:

	public $default = array(
	    'datasource' => 'Database/Mysql',
	    'persistent' => false,
	    'host' => 'localhost',
	    'port' => '',
	    'login' => 'mysql_ueser',
	    'password' => 'mysql_pass',
	    'database' => 'db_name',
	    'schema' => '',
	    'prefix' => '',
	    'encoding' => ''
	);

Ten en cuenta que los campos ‘login’, ‘password’, ‘database’ tendrás que cambiarlos por tu usuario de MySQL, tu contraseña de MySQL y el nombre que le diste a la Base de Datos. Guarda este fichero.
Ahora ya podrás acceder a la página inicial de bienvenida de CakePHP en tu máquina.

3. Nivel básico de PHP.
=======================
Si estás familiarizado con la programación orientada a objetos, mucho mejor. Aún así puedes seguir desarrollando con tu estilo procedimental si lo prefieres.

4. Conocimiento sobre patrón MVC.
=================================
Puedes encontrar una definición rápida aquí: Entendiendo el Modelo - Vista - Controlador (http://book.cakephp.org/2.0/es/cakephp-overview/understanding-model-view-controller.html)
. No tengas miedo, sólo es media página.

============================

NOTA: Recordar que el directorio de apache (/srv/http) deve tener los perisos para ser leible almenos para el usuario www-data.

========================================================
--------------------------------------------------------

CakePHP Configuracion basica
============================

* Configurar una cadena personalizada (o "salt") para su uso en los hashes de seguridad.
==============================================================================
El string de seguridad se utiliza en la generación de 'hashes'. 
El valor por defecto debe ser cambiado y escribe cualquier cosa diferente. Cualquier cosa vale. 
Para cambiarlo vete a la línea 203 del fichero /app/Config/core.php y verás algo así:

	/**
 	 * A random string used in security hashing methods.
 	 */
	Configure::write('Security.salt', 'pl345e-P45s_7h3*S@l7!');

* Configurar de un número personalizado (o "seed") para usar en el cifrado.
===========================================================================
El número 'seed' se utiliza para encriptar y desencriptar cadenas. 
Cambia el valor por defecto en el ficharo /app/Config/core.php línea 208. 
No importa qué numero pongas, que sea difícil de adivinar.

	/**
 	 * A random numeric string (digits only) used to encrypt/decrypt strings.
 	 */
	Configure::write('Security.cipherSeed', '7485712659625147843639846751');

* Asignar acceso de escritura a Cake, a su directorio tmp.
==========================================================
Para asignar permisos al directorio app/Tmp, la mejor forma es ver qué usuario está ejecutando el servidor web 
(<?php echo 'whoami'; ?>) y cambiar el directorio para que el nuevo propietario sea el usuario que ejecuta el servidor web.

En un sistema *nix esto se hace así:

	$ chown -R www-data app/tmp

Suponiendo que www-data sea el usuario que ejecuta tu servidor web (en otras versiones de *unix como fedora, el usuario suele llamarse 'apache').

Si CakePHP no puede escribir en este directorio, te informará de ello en la página de bienvenida, siempre que tengas activado el modo depuración, por defecto está activo.