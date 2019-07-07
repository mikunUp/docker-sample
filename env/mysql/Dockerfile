FROM mysql:5.7

COPY init/* /docker-entrypoint-initdb.d/

CMD ["mysqld"]

#RUN apt-get update
#RUN apt-get install -y vim
