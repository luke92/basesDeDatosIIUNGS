#!/bin/sh

psql $dbname $username << EOF

\c tp2bdii

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

EOF
exit 0
