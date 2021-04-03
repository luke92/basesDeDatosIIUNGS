select distinct pqv1.usuario as usuario1, pqv2.usuario as usuario2
from pelis_que_vio pqv1, pelis_que_vio pqv2
where pqv1.usuario < pqv2.usuario and not exists
( select * from pelis_que_vio pqv3 where pqv1.usuario = pqv3.usuario and 
not exists (select * from pelis_que_vio pqv4 where pqv2.usuario = pqv4.usuario and pqv3.pelicula_id=pqv4.pelicula_id))
and not exists ( select * from pelis_que_vio pqv3 where pqv2.usuario = pqv3.usuario and not exists 
(select * from pelis_que_vio pqv4 where pqv1.usuario = pqv4.usuario and pqv3.pelicula_id = pqv4.pelicula_id));

CREATE OR REPLACE FUNCTION superQuery()
RETURNS SETOF col_tabla AS
$BODY$
declare
tabla col_tabla%rowtype;
begin
for tabla in select distinct pqv1.usuario as usuario1, pqv2.usuario as usuario2
from pelis_que_vio pqv1, pelis_que_vio pqv2
where pqv1.usuario < pqv2.usuario and not exists
( select * from pelis_que_vio pqv3 where pqv1.usuario = pqv3.usuario and 
not exists (select * from pelis_que_vio pqv4 where pqv2.usuario = pqv4.usuario and pqv3.pelicula_id=pqv4.pelicula_id))
and not exists ( select * from pelis_que_vio pqv3 where pqv2.usuario = pqv3.usuario and not exists 
(select * from pelis_que_vio pqv4 where pqv1.usuario = pqv4.usuario and pqv3.pelicula_id = pqv4.pelicula_id)); 
from col_tabla loop
return next tabla;
end loop;
return;
end
$BODY$
LANGUAGE 'plpgsql';
