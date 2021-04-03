<html>
    <head>
        <?php
            include('./includes/head.php');
        ?>
        <title>TP2BDII</title>
    </head>
    <body>
        <?php
            require_once ('./app/util/Sesion.php');
            if(!isLogged())
            {
                include('./includes/signInUp.php');
            }
            else
            {
                $newURL = 'listarPelisVistas.php';
                header('Location: '.$newURL);
            }
                
        ?>
        
    </body>
</html>
