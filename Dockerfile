FROM php:8.2-cli

WORKDIR /app

COPY . .

RUN mkdir -p uploads && chmod -R 777 uploads

EXPOSE 10000

CMD ["php", "-S", "0.0.0.0:10000", "-t", "/app"]
