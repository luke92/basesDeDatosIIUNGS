#!/bin/sh
psql $dbname $username << EOF
select a.nombre
from alumno a
where 3 = 
(select count (*)
from cursa c
where c.legajo = a.legajo);

EOF
exit 0 