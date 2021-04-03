
        <?php
            require_once ('../modelo/Tupla.php');
            require_once ('../servicio/PelisQueVioDao.php');
            $html = "";
            $pelisQueVioDao = new PelisQueVioDao();
            $tuplas = $pelisQueVioDao->listarVistas();
            foreach($tuplas as $tupla)
            {
                $html.= "<tr>";
                $html.= "<td>" . $tupla->getUsuario1() . "</td>";
                $html.= "<td>" . $tupla->getUsuario2() . "</td>";
                $html.= "</tr>";

            }
            echo $html;
            
        ?>

