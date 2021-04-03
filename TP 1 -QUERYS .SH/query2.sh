#!/bin/sh

psql $dbname $username << EOF
select nombre
from alumno a
where legajo IN 
(select legajo
from cursa
group by legajo
having count(*) = 3);
EOF
exit 0 
