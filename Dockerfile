FROM php:7-fpm
RUN apt update
RUN apt install -y git
RUN cd /srv && git clone https://github.com/redbooth/free-file-icons.git icons
