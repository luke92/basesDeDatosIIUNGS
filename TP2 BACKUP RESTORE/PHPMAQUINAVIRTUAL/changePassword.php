<html>
    <head>
        <?php
            include('./includes/head.php');
        ?>
        <title>TP2BDII - Cambiar Contraseña</title>
    </head>
    <body>
        <?php
            require_once ('./app/util/Sesion.php');
            if(!isLogged())
            {
                $newURL = 'index.php';
                header('Location: '.$newURL);
            }
            else
            {
                include('./includes/navBar.php');
                include('./includes/changePasswordView.php');
            }
                
        ?>
        
    </body>
</html>