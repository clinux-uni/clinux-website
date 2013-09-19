# CLINUX - WEBSITE

Pagina web de la Comunidad de Software Libre de la Universidad Nacional de Ingeniería - UNI, Comunidad Linux UNI - CLINUX

<a href="http://uni.edu.ni">UNI</a>

## Antes de empezar

Para que la pagina web funcione correctamente se debe tener instalado y correctamente configurado:

* <a href="http://www.apache.org/">Apache</a> / <a href="http://www.nginx.org">nginx</a>
* <a href="http://php.net/">PHP >= 5.3.7</a>
* La extensión MCrypt de PHP (requerimientos de <a href="http://laravel.com/docs/installation#server-requirements">lavarel framework</a>)
* <a href="http://www.mysql.com/">MySQL</a> / <a href="https://mariadb.org/">MariaDB</a>

## Lanzar el Sitio

Realmente con lo anterior instalado y debidamente configurado (LAMP - Apache, MySQL/MariaDB, PHP) no tendrías que hacer mas
que clonar el repositorio dentro de la raíz de documentos del servidor web y asignarle permisos de escritura sobre el directorio app/storage ubicado en
la carpeta de sitio que se acaba de clonar de github. <a href="http://laravel.com/docs/installation#configuration">Ver "Permissions" en docs de lavalel</a>

	chmod -R 775 $DocumentRoot/clinux-website/app/storage

## Instalar mediante Composer

### 1. Clonar el Repositorio de Github
Entra a tu DocumentRoot, en la mayoria de los sistemas Linux es /var/www y ejecuta el comando:
	$ git clone git@github.com:clinux-uni/clinux-website.git

Entra a la carpeta del Proyecto clinux-website

### 2. Instalar Composer
Ejecuta el siguiente comando:
	$ curl -sS https://getcomposer.org/installer | php

Ahora tendras un archivo composer.phar en tu directorio.
Comprueba la instalación con el siguiente comando:
	$ php compser.phar

(Opcional)
Si quieres tener composer de manera global en tu sistema, mueve el archivo composer.phar a tu directorio $PATH, en la mayoria de los sistemas Linux es /usr/local/bin
	$ mv composer.phar /usr/local/bin/composer

(Info)
Más información acerca de Composer.
* <a href="http://getcomposer.org/>Composer</a>

### 3. Instala las dependecias del Proyecto Laravel mediante Composer
Si solo descargaste Composer ejecuta el siguiente comando:
	$ php composer.phar install

Si agregaste composer al $PATH del sistema:
	$composer install

Comprueba la instalación verificando que exista el directorio vendor.

### 4. Abre tu navegador preferido e introduce la url del proyecto:
	http://localhost/clinux-website/public

Si todo a salido bien podras ver el sitio.

* Si no puedes ver el sitio, por favor verifica los permisos del directorio app/storage. Regresa al paso "Lanzar el Sitio" para corregir este problema, o ponte en contacto con la comunidad.

Gracias por tu apoyo y Felíz Codeo.
