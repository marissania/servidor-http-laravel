Comando para rodar o servidor

docker-compose up -d nginx mysql phpmyadmin




PORTAS USADAS, PODEM SER ALTERADAS SE ESTIVER SENDO USADAS

PASTA LARADOCK ARQUIVO .ENV



WORKSPACE_
### WORKSPACE_SSH_PORt#################################################


linha 182


WORKSPACE_SSH_PORT=9999





### NGINX #################################################

linha 319

NGINX_HOST_HTTP_PORT=8888
NGINX_HOST_HTTPS_PORT=543
NGINX_HOST_LOG_PATH=./logs/nginx/
NGINX_SITES_PATH=./nginx/sites/
NGINX_PHP_UPSTREAM_CONTAINER=php-fpm
NGINX_PHP_UPSTREAM_PORT=9000
NGINX_SSL_PATH=./nginx/ssl/




### MYSQL #################################################

linha 372

MYSQL_VERSION=latest
MYSQL_DATABASE=default
MYSQL_USER=default
MYSQL_PASSWORD=secret
MYSQL_PORT=8306
MYSQL_ROOT_PASSWORD=root
MYSQL_ENTRYPOINT_INITDB=./mysql/docker-entrypoint-initdb.d




### PHP MY ADMIN ##########################################

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
