#!/bin/sh

psql $dbname $username << EOF  #Conexion, EOF es el bloque donde se ejecutan todas las querys
tiempoQ1 = $ time sh query1.sh
tiempoQ2 = $ time sh query2.sh
EOF

echo "Tiempo de query 1 = $tiempoQ1 --- Tiempo de query 2 = $tiempoQ2"
#-eq equals -gt "greater than" = >
if [ "$tiempoQ1" -eq "$tiempoQ2" ];
	echo "ambas querys son igual de rapidas"
else
	if [ "$tiempoQ1" -gt "$tiempoQ2" ];
		echo "La query 1 es la mas rapida !!"
	else
		echo "La query 2 es la mas rapida!!"

exit 0 #Salir del proceso del .sh
