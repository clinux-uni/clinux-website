
[CLINUX.UNI.EDU.NI](http://clinux.uniedu.ni/)
=============================================
Pagina web de la Comunidad Linux UNI - CLINUX
---------------------------------------------

En esta pagina corre:

* [Apache](http://www.apache.org/)
* [PHP 5.x](http://php.net/)
* [MariaDB](https://mariadb.org/)
* [CakePHP](http://cakephp.org/)
* [NodeJS](http://nodejs.org/)
* [Coffeescript](http://coffeescript.org/)
* [Fundation](http://foundation.zurb.com/)

> Sientanse libre de agregar lo que crean conveniente para la eficacia del tutorial/historico de conf.

========================================================
--------------------------------------------------------

# CakePHP

Esto es lo que necesitas:	

## Servidor web funcionando.

__Apache__, tendremos que ajustar un poco la configuración inicial, pero todos los pasos son sencillos. La mayor parte de nosotros podrá tener CakePHP funcionando sin tocar nada en su configuración.

## Descargar la última versión de CakePHP.

Se puede descargar en la web del proyecto en [github](https://github.com/cakephp/cakephp/tags) y descargar/descomprimir la última versión de la rama 2.0
También puedes clonar el repositorio usando __git__: 

	git clone git://github.com/cakephp/cakephp.git

Tendriamos algo asi:

	$/path_to_document_root
	    /app
	    /lib
	    /plugins
	    /vendors
	    .htaccess
	    index.php
	    README

## Base de datos funcionando.

Usaremos __MySQL__ en este sitio. MySQL puede ser perfectamente reemplazado por otro gestor de bases de datos como __MariaDB__, __redis__ o la de tu preferencia. Necesitarás saber cómo crear una base de datos nueva. CakePHP se encargará del resto.

## Nivel básico de PHP.

Si estás familiarizado con la programación orientada a objetos, mucho mejor. Aún así puedes seguir desarrollando con tu estilo procedimental si lo prefieres.

## Conocimiento sobre patrón MVC.

Puedes encontrar una definición rápida aquí: Entendiendo el [Modelo-Vista-Controlador](http://book.cakephp.org/2.0/es/cakephp-overview/understanding-model-view-controller.html).

> Recordar que el directorio de apache deve tener los perisos para ser leible almenos para el usuario www-data.

========================================================
--------------------------------------------------------

# CakePHP Configuracion basica

## Instalar un Gestor de Base de Datos

La mayoria de los gestores de bases de datos libre en especial __MySQL__ y __MariaDB__ (Sucesor del anterior) se puden instlar desde los repocitorios oficiales de la mayoria de las distribuciones __Linux__. Para mas informacion acerca de como instalarlo desde el manejador de paquetes de tu distribucion visita [MariaDB Repositories](https://downloads.mariadb.org/mariadb/repositories/).

Usarias algo asi:

	ArchLinux
	# pacman -S mariadb

> Si tu distribucion no aparece en las intrucciones de MariaDB Repositories puedes ir la pagina oficial de __MariaDB__ y descargar el binario, el fuente o le paquete en [Downloads](MariaDB Repositories).

## Crear una base de datos.

Con cualquier gestor de base de datos se creara una base de datos, la creacion de la base de datos es necesario para el funcionamiento del framework aunque no la uses. Para la pagina de la __Comunidad Linux UNI - CLINUX__ llamaremos a la base de datos __clinux_db__. 

De ser necesario aqui esta el comando de mysql para crear un base de datos desde la linea de conmando:

	mysql> CREATE DATABASE menagerie;

## Configurando la Base de Datos.

CakePHP utiliza un archivo centralizado para manejar la conexion con la base de datos, y utiliza un archivo por base de datos aunque por lo general se conecta a una unica base de datos puede haber el caso de que se conecte con diferentes bases de datos por tanto tendria de un archivo por bases de datos sean o no del mismo gestor de bases de datos.Por defecto CakePHP esta pensado para conectarse con MySQL.

El archivo se encuentra en __/app/Config/__. CakePHP tambien cuenta con un archivo muestra a partir del cual podemos configurar nuestra propia coneccion. 
Solo se tiene que cambiar el nombre del archivo __/app/Config/database.php.default__ por __/app/config/database.php__ hemos eliminado el __.default__ del final.
Edita ahora este archivo y verás un array definido en la variable __$default__ que contiene varios campos, modifica esos campos para que se correspondan con tu configuración actual de acceso a la Base de Datos. 

Debería quedarte algo similar a esto:

	public $default = array(
	    'datasource' => 'Database/Mysql',
	    'persistent' => false,
	    'host' => 'localhost',
	    'port' => '',
	    'login' => 'sam',
	    'password' => '1f3870be274f6c49b3e31a0c6728957f',
	    'database' => 'clinux_db',
	    'schema' => '',
	    'prefix' => '',
	    'encoding' => ''
	);

> Ten en cuenta que los campos __login__, __password__, __database__ tendrás que cambiarlos por tu usuario de MySQL, tu contraseña de MySQL y el nombre que le diste a la Base de Datos. 

Guarda este fichero. Ahora ya podrás acceder a la página inicial de bienvenida de CakePHP en tu máquina.

## Configurar __salt__ para los hashes de seguridad.

__satl__ es un string de seguridad que se utiliza para generar __hashes__. __satl__ se encuentra en el archivo __/app/Config/core.php__, el valor por defecto debe ser cambiado y escribe cualquier cosa diferente.

El archivo verse algo así:

	Configure::write('Security.salt', 'pl345e-P45s_7h3*S@l7!');

# Configurar __seed__ para el cifrado.

El número __seed__ se utiliza para encriptar y desencriptar cadenas. Cambia el valor por defecto en el archivo __/app/Config/core.php__. No importa qué numero pongas, el que sea sera difícil de adivinar.

	Configure::write('Security.cipherSeed', '7485712659625147843639846751');

## Acceso de CakePHP a su directorio __/tmp__.

Para asignar permisos al directorio __/app/Tmp__, la mejor forma es ver qué usuario está ejecutando el servidor web. 
Se puede saber el usuario con el siguiente script:

	<?php echo 'whoami'; ?>

Cambia el propietario del directorio para que el nuevo propietario sea el usuario que ejecuta el servidor web.

En un sistema __*nix__ esto se hace así:

	$ chown -R www-data app/tmp

Suponiendo que __www-data__ sea el usuario que ejecuta tu servidor web (en otras versiones de __*unix__ como __fedora__, el usuario suele llamarse __apache__).

Si CakePHP no puede escribir en este directorio, te informará de ello en la página de bienvenida, siempre que tengas activado el modo depuración, por defecto está activo.

## Installar NodeJS
	
Hay un diverso número de maneras de instalar __Node.js__ en __Linux__, las instrucciones para la instalación de __Node.js__ en distribuciones Linux específicas utilizando un gestor de paquetes se puede encontrar en [NodePackage](https://github.com/joyent/node/wiki/Installing-Node.js-via-package-manager).

Deberia de ser tan facil como:

	Archlinux
	# pacman -S nodejs

Si tu distribucion no aparece en la lista o quieres una instalarion mas personalizada puedes recurrir a la documentacion oficial de instalacion de NodeJS en GitHub:

	https://github.com/joyent/node/wiki/Installation

> Escribe __node -v__ or __npm -v__ en la línea de comandos para ver que ha sido instalado correctamente.

## Instalar CofeeScript

Para instalar CofeeScript, primero asegúrese de que tiene una copia de trabajo de la última versión estable de __Node.js__ y __npm__ (el Gestor de paquetes de Node). A continuación, puede instalar CoffeeScript con npm:

	$ sudo npm install -g coffee-script

> Puedes quetar __-g__ si no deseas instalar de manera global.
> Escribe __coffee -v__ en la línea de comandos para ver que ha sido instalado correctamente.
> Para el reconicimiento de la sintaxis de CofeeScript en SublimeText2 [Control.sublime-package](https://github.com/Xavura/CoffeeScript-Sublime-Plugin#installation)

## Intalar Fundation

Para instalar __Fundation__ no hace falta mas que acceder a la pagina de [Fundation](http://foundation.zurb.com/) descargar la version de CSS, descompeimirlo y copiar los archibos al direcctorio de __CSS__ en __app/webroot/css__ y todo listo para empezar.

## Configurar rutas de aceso