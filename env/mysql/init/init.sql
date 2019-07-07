   DROP DATABASE IF EXISTS sample01;
   CREATE DATABASE dbtest;
   USE dbtest;
   DROP TABLE IF EXISTS user;

   CREATE TABLE user (
      id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      name TEXT NOT NULL
   )DEFAULT CHARACTER SET=utf8;

   INSERT INTO user (name) VALUES ("mikunUp"),("michenUp"),("mikanDown");
