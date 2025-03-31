GRANT ALL PRIVILEGES ON *.* TO `user`@`%`;
FLUSH PRIVILEGES;

DROP DATABASE if exists `app-db`;
CREATE DATABASE `app-db`;
USE `app-db`;