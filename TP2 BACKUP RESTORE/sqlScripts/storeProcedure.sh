#!/bin/sh

psql $dbname $username << EOF

\c tp2bdii

CREATE OR REPLACE FUNCTION agregarPersona(
	_usuario VARCHAR(30), 
	_clave VARCHAR, 
	_apellido VARCHAR(30),
	_nombre VARCHAR(30))

RETURNS void AS \$\$

INSERT INTO Persona (usuario,clave,nombre,apellido) VALUES (_usuario, _clave, _nombre, _apellido);
\$\$
LANGUAGE SQL;


CREATE OR REPLACE FUNCTION loginPersona
(
	_usuario varchar(30)
)

RETURNS TABLE ("usuario" varchar, "clave" varchar, "nombre" varchar, "apellido" varchar) AS
\$\$
BEGIN
	RETURN QUERY
   	SELECT p.usuario, p.clave, p.nombre, p.apellido FROM persona p WHERE p.usuario = _usuario;
END;
\$\$ LANGUAGE plpgsql;


CREATE OR REPLACE FUNCTION cambiarContrasena(
	_usuario VARCHAR(30), 
	_clave VARCHAR
)
RETURNS void AS \$\$

UPDATE persona SET clave = _clave WHERE usuario = _usuario;

\$\$
LANGUAGE SQL;
EOF
exit 07 
