FROM amazonlinux:2023

RUN yum -y update

RUN yum -y install nginx

COPY ./docker/prd/nginx/default.conf /etc/nginx/conf.d/default.conf
COPY ./docker/prd/nginx/nginx.conf /etc/nginx/nginx.conf:cached

ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]