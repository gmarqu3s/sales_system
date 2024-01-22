FROM phpdockerio/php:8.2-fpm
WORKDIR "/application"

COPY . .

RUN set -eux; \
    apt-get update; \
    apt-get install -y --no-install-recommends \
        php8.2-mysql; \
    apt-get clean; \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*