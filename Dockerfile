FROM php:8.3.0-cli

WORKDIR /app

COPY . /app/

EXPOSE 8002

CMD ["php" , "-S" , "0.0.0.0:8000" , "client.php"]

