CREATE DATABASE contactdb;

USE swdb;

CREATE TABLE enquiry(
    -> subject varchar(10) Not Null,
    -> name varchar(20) Not Null,
    -> email varchar(255) Not Null,
    -> phone varchar(20) Not Null,
    -> content varchar(1000) Not Null
    -> );