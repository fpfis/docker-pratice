FROM fpfis/php71-dev

RUN mkdir /app
WORKDIR /app
ADD . /app

RUN composer install

ENTRYPOINT [ "php", "/app/index.php" ]
