FROM alpine

 WORKDIR /code
 ADD . .

 COPY ./docker/web/files /root/files

 RUN apk --no-cache add nginx php-fpm composer php-zip php-tokenizer php-fileinfo php-dom php-xmlwriter php-xml php-session php-pdo_mysql php-zlib php-curl npm && \
 mkdir /run/nginx

 EXPOSE 80

 CMD sh /root/files/startup.sh
