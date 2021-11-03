<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>



Comando para rodar o servidor

Rodar o Comando dentro da pasta laradock

docker-compose up -d nginx mysql phpmyadmin




PORTAS USADAS, PODEM SER ALTERADAS SE ESTIVER SENDO USADAS


PASTA LARADOCK ARQUIVO .ENV



WORKSPACE_
### WORKSPACE_SSH_PORt


linha 182


WORKSPACE_SSH_PORT=9999





### NGINX 

linha 319

NGINX_HOST_HTTP_PORT=8888
NGINX_HOST_HTTPS_PORT=543
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000
NGINX_SSL_PATH=./nginx/ssl/




### MYSQL 

linha 372

MYSQL_VERSION=latest
MYSQL_DATABASE=default
MYSQL_USER=default
MYSQL_PASSWORD=secret
MYSQL_PORT=8306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d




### PHP MY ADMIN 

linha 518



# Accepted values: mariadb - mysql

PMA_DB_ENGINE=mysql

# Credentials/Port:

PMA_USER=default
PMA_PASSWORD=secret
PMA_ROOT_PASSWORD=secret
PMA_PORT=1010
PMA_MAX_EXECUTION_TIME=600
PMA_MEMORY_LIMIT=256M
PMA_UPLOAD_LIMIT=2G
