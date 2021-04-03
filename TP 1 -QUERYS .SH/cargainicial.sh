#!/bin/sh
#sudo -i -u postgres -A goni
psql $dbname $username << EOF
drop table if exists alumno;
drop table if exists materia;
drop table if exists Cursa;

CREATE TABLE alumno
(
	legajo varchar(20) primary key,
	nombre varchar(20),
	apellido varchar(20),
	dni varchar(10),
	f_nacimiento date
);

create table materia
(
	codigo varchar(20) ,
	nombre varchar(20),
	cantidad_horas int,
	promocionable boolean
);

create table cursa
(
	legajo varchar(20),
	materia varchar(20),
	inscripcion_ts timestamp
);

insert into alumno(legajo,nombre,apellido,dni,f_nacimiento)
select 10000 + generate_series(1,10000), 
'Juan' || generate_series(1,10000),
'Perez'||generate_series(1,10000),
10000 + generate_series(1,10000), 
now()::date + (( random()- 0.5)* 500 )::integer;

insert into materia (codigo,nombre,cantidad_horas,promocionable)
select 'MATE'||generate_series (1, 20),
'Materia'||generate_series(1,20),
(random() * 4 + 4)::integer,
((random() * 1)::integer)::boolean;

insert into cursa (legajo,materia,inscripcion_ts)
select legajo, 'MATE'||'2' , now()
from alumno
where legajo IN ('10000','10002','10003','10004','10005');

EOF
exit 0