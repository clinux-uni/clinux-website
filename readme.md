# CLINUX - WEBSITE

Pagina web de la Comunidad de Software Libre de la Universidad Nacional de Ingenieria - UNI, Comunidad Linux UNI - CLINUX

## Antes de empesar

Para que la pagina web funcione correctamete se debe tener instalado y correctamente configurado:

* <a href="http://www.apache.org/">Apache</a>
* <a href="http://php.net/">PHP</a>
* <a href="http://www.mysql.com/">MySQL</a> / <a href="https://mariadb.org/">MariaDB</a>

## Lanzar el sitio

Realmente con lo anterior instalado y debidamente configurado (LAMP - Apache, MySQL/MariaDB, PHP) no tendrias que hacer mas
que clonar el repo en el directorio de paginas web de apache y asignarle permisos 775 al directorio app/storage dentro de
la carpeta de sitio que se acaba de clonar de github.

	chmod -R 777 apache_www_dir/clinux-website/app/storage