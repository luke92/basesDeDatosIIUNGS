drop table pelis_que_vio;
drop table persona;
create table persona
(
	usuario varchar(30) primary key,
	clave varchar,
	apellido varchar(30),
	nombre varchar(30)
);
drop table pelicula;
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

insert into persona values ('juan','juan','Juan','Perez');
insert into persona values ('maria','maria','Maria','Ibanies');
insert into persona values ('lucas','lucas','Lucas','Miranda');
insert into persona values ('pocho','lapantera','Pocho','Querido');
insert into persona values ('julio','lucas','asdasd','Miranda');
insert into persona values ('pedro','lapantera','asdasdads','Querido');

insert into pelicula values (1,'Titanic');
insert into pelicula values (2,'Rocky');
insert into pelicula values (3,'Furia');
insert into pelicula values (4,'Peli');
insert into pelicula values (5,'WHAT');


insert into pelis_que_vio values (1,'juan');
insert into pelis_que_vio values (1,'maria');
insert into pelis_que_vio values (2,'juan');
insert into pelis_que_vio values (2,'maria');
insert into pelis_que_vio values (3,'lucas');
insert into pelis_que_vio values (3,'pocho');
