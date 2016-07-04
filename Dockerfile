FROM ubuntu
RUN apt-get update
RUN apt-get install -y wkhtmltopdf xvfb
RUN apt-get install -y nginx php7.0-common php7.0-cli php7.0-fpm
RUN apt-get install -y openssl build-essential libssl-dev
RUN apt-get install -y fonts-arphic-*


ADD nginx.conf /etc/nginx/nginx.conf
ADD site-config /etc/nginx/sites-available/default
ADD index.php /var/www/html/index.php

CMD service php7.0-fpm start;nginx

EXPOSE 80