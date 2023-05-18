FROM amazonlinux:2023

RUN yum -y update

RUN yum -y install nginx

COPY ./default.conf /etc/nginx/conf.d/default.conf
COPY ./nginx.conf /etc/nginx/nginx.conf:cached

ENTRYPOINT ["/usr/sbin/nginx", "-g", "daemon off;"]