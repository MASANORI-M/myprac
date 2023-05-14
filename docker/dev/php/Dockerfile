FROM amazonlinux:2

RUN yum -y update
RUN yum -y install vi less php-intl \
    php-cli php-json php-common php-devel php-fpm \
    php-gd php-mysqlnd php-mbstring php-pdo php-xml

# install php8.1
RUN amazon-linux-extras install php8.1 -y

RUN echo 'short_open_tag = On' >> /etc/php.ini
EXPOSE 9000

# run php-fpm in the foreground
ENTRYPOINT /usr/sbin/php-fpm -F

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
# COPY ./www.conf /etc/php-fpm.d/www.conf
# COPY ./php.ini /etc/php.ini

WORKDIR /var/www/vhosts/myprac