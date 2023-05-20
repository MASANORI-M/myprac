FROM amazonlinux:2023

RUN yum -y update
RUN yum -y install vi less php-intl \
    php-cli php-json php-common php-devel php-fpm \
    php-gd php-mysqlnd php-mbstring php-pdo php-xml

# install php8.1
RUN yum -y install php8.1 -y

# unix socket
RUN mkdir /var/run/php-fpm
VOLUME [ "/var/run/php-fpm" ]

RUN echo 'short_open_tag = On' >> /etc/php.ini
RUN echo 'date.timezone = Asia/Tokyo' >> /etc/php.ini
EXPOSE 9000

# run php-fpm in the foreground
ENTRYPOINT /usr/sbin/php-fpm -F

WORKDIR /var/www/vhosts/myprac

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY ./docker/prd/php/www.conf /etc/php-fpm.d/www.conf
COPY ./docker/prd/php/php.ini /etc/php.ini
COPY ./src .

# nodeのインストール
RUN curl -fsSL https://rpm.nodesource.com/setup_18.x | bash -
RUN yum -y install nodejs

# Node.jsの依存パッケージインストール
RUN npm install -g npm