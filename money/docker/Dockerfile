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
RUN apk add --no-cache php7.2-intl \
    && rm -rf /var/cache/apk/*

WORKDIR /var/www