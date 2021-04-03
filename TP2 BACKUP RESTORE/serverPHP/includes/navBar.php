<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php">TP2 RESTORE WAL</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <?php
                require_once ('./app/util/Sesion.php');
                echo getNombreApellido();
            ?>
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="changePassword.php">Cambiar Contraseña</a></li>
          <li><a href="app/controlador/logoutController.php">Cerrar Sesión</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Tupla de Pares de Usuario
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="listarPelisVistas.php">Mostrar Peliculas vistas</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
