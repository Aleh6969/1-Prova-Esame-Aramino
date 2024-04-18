CREATE DATABASE dbStabilimentiBalneari;
USE dbStabilimentiBalneari;
CREATE TABLE IF NOT EXISTS Stabilimento()ENGINE = INNODB;
CREATE TABLE IF NOT EXISTS Cliente(UserName Varchar(30) UNIQUE, UserPassword varchar(99), UserEmail varchar(255))ENGINE = INNODB;