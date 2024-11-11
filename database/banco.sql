create database if not exists Twoods;

use Twoods;

create table usuario(
id integer primary key auto_increment,
nome varchar(100) not null,
email varchar(100) not null,
senha varchar(100) not null
);

create table redacao (
	id integer primary key auto_increment,
    titulo varchar(100) not null,
	redacao text(1000)
);

create table repertorio (
	id integer primary key auto_increment,
    titulo varchar(100) not null,
	repertorio text(1000)
);

