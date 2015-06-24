FROM ubuntu:14.04

MAINTAINER PyYoshi "myoshi321go@gmail.com"

RUN apt-get install -y software-properties-common
RUN apt-key adv --recv-keys --keyserver hkp://keyserver.ubuntu.com:80 0x5a16e7281be7a449
RUN add-apt-repository -y "deb http://dl.hhvm.com/ubuntu $(lsb_release -sc) main"
RUN apt-get update && apt-get dist-upgrade -y
RUN apt-get install -y hhvm-dbg
RUN apt-get install -y php5-cli php5-curl php5-json php5-memcache php5-memcached php5-xdebug php5-apcu
RUN echo "apc.enable_cli=1" >> /etc/php5/cli/conf.d/20-apcu.ini
RUN apt-get install -y memcached curl bash-completion
RUN rm -rf /tmp/google-api-php-client-test && mkdir -p /tmp/google-api-php-client-test
RUN cd /tmp/google-api-php-client-test && curl -sS https://getcomposer.org/installer | php && cd -

ADD ./ /tmp/google-api-php-client-test
