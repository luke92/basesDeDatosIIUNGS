#!/bin/sh

psql $dbname $username << EOF
drop database if exists TP2BDII;
create database TP2BDII;

\c tp2bdii

create table persona
(
	usuario varchar(30) primary key,
	clave varchar,
	apellido varchar(30),
	nombre varchar(30)
);

create table pelicula
(
	pelicula_id serial primary key,
	pelicula_nombre varchar(30)
);

create table PELIS_QUE_VIO
(
	pelicula_id int references pelicula(pelicula_id),
	usuario varchar(20) references persona(usuario),
	primary key(pelicula_id,usuario)	
);

alter  table if exists persona
add constraint UQ_persona_nombreDuplicado
unique (apellido,nombre);

alter table if exists pelicula
add constraint UQ_pelicula_NombreRepetido
unique (pelicula_nombre);

EOF
exit 0

