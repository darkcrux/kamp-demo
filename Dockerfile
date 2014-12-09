FROM debian
MAINTAINER dexter.genterone@gmail.com

RUN apt-get update && apt-get install -y apache2 php5 php-pear php5-mysql

ADD demo.php /var/www/demo.php

EXPOSE 80

CMD /usr/sbin/apache2ctl -D FOREGROUND
