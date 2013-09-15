# CLINUX - WEBSITE

Pagina web de la Comunidad de Software Libre de la Universidad Nacional de Ingeniería - UNI, Comunidad Linux UNI - CLINUX

## Antes de empezar

Para que la pagina web funcione correctamente se debe tener instalado y correctamente configurado:

* <a href="http://www.apache.org/">Apache</a> / <a href="http://www.nginx.org">nginx</a>
* <a href="http://php.net/">PHP >= 5.3.7</a>
* La extensión MCrypt de PHP (requerimientos de <a href="http://laravel.com/docs/installation#server-requirements">lavarel framework</a>)
* <a href="http://www.mysql.com/">MySQL</a> / <a href="https://mariadb.org/">MariaDB</a>

## Lanzar el sitio

Realmente con lo anterior instalado y debidamente configurado (LAMP - Apache, MySQL/MariaDB, PHP) no tendrías que hacer mas
que clonar el repositorio dentro de la raíz de documentos del servidor web y asignarle permisos de escritura sobre el directorio app/storage ubicado en
la carpeta de sitio que se acaba de clonar de github. <a href="http://laravel.com/docs/installation#configuration">Ver "Permissions" en docs de lavalel</a>

	chmod -R 775 $DocumentRoot/clinux-website/app/storage
