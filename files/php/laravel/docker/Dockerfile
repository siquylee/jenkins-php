FROM phpearth/php:7.2-apache

# Alpine Linux
RUN curl -LO https://www.phing.info/get/phing-3.0.0-alpha1.phar \
    && chmod +x phing-3.0.0-alpha1.phar && mv phing-3.0.0-alpha1.phar /usr/local/bin/phing \
    && curl -LO https://phar.phpunit.de/phpunit-6.phar \
    && chmod +x phpunit-6.phar && mv phpunit-6.phar /usr/local/bin/phpunit \
    && curl -LO http://phpdox.de/releases/phpdox.phar \
    && chmod +x phpdox.phar && mv phpdox.phar /usr/local/bin/phpdox \
    && curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

RUN apk add --no-cache netcat-openbsd \
    && apk add --no-cache php7.2-xsl php7.2-xdebug \
    && rm -rf /var/cache/apk/*

# Component required by BookStack
RUN apk add --no-cache \
    php7.2-pdo php7.2-curl php7.2-mbstring \
    php7.2-ldap php7.2-mcrypt php7.2-tidy \
    php7.2-xml php7.2-zip php7.2-gd \
    php7.2-pdo_mysql php7.2-mcrypt \
    && rm -rf /var/cache/apk/*

WORKDIR /var/www