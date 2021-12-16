FROM mysql:5.6

ENV MYSQL_ALLOW_EMPTY_PASSWORD="yes"

COPY fbe8261e02429_flag /
COPY docker-entrypoint.sh /usr/local/bin/
COPY mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf
RUN  chmod +x /usr/local/bin/docker-entrypoint.sh