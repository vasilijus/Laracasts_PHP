# db setup

create database mytodo;

create table todos(id integer PRIMARY KEY AUTO_INCREMENT ,description text NOT NULL, completed boolean NOT NULL);


insert into todos(description, completed) values("finish", true);
