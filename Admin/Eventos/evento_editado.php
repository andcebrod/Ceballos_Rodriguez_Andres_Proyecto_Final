<?php

  //Open the session
  session_start();

  if (isset($_SESSION["Rol"])) {
    //SESSION ALREADY CREATED
    //SHOW SESSION DATA

  } else {
    session_destroy();
    header("Location: ../inicio_sesion.php");
  }


 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Gran Poder Montellano</title>
  </head>
  <body>
    <?php
    //CREATING THE CONNECTION
      $connection = new mysqli("localhost", "root", "Admin2015", "granPoder",3316);
      $connection->set_charset("uft8");


      //TESTING IF THE CONNECTION WAS RIGHT
      if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
    ?>
    <div class="container">

      <div class="row" id="social">
        <div class="col-md-8" id="social1">
          <span>Bienvenido a la web de Nuestra Hermandad</span>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-primary" type="button" name="button"><a href="../admin.php">Panel principal</a></button>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger" type="button" name="button"><a href="">Cerrar Sesión</a></button>
        </div>
      </div>
      <div class="row">
        <nav class="col-md-12 navbar navbar-expand-xl bg-light navbar-light">
        <!-- Brand/logo -->
        <a class="col-md-1 navbar-brand" href="#">
          <img src="escudo.jpg" alt="logo" style="width:40px;">
        </a>

        <!-- Links -->
        <ul class="navbar-nav col-md-10">
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Articulos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Eventos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Bienes</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Área de Usuarios</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Archivos de interés</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="#"><b>Contacto</b></a>
            </li>
          </div>
        </ul>
      </nav>
      </div>

      <div class="row" class="contenido">
        <div class="col-md-12" id="contprincipal">

          <?php if (!isset($_POST["CodEvento"])) :?>

            <form method="post">
              <div class="form-group">
                <label for="Titulo">Titulo: </label>
                <input type="text" class="form-control" name="Titulo" value="<?php echo $_GET['Titulo']; ?>">
              </div>
              <div class="form-group">
                <label for="Subtitulo">Subtitulo: </label>
                <input type="text" class="form-control" name="Subtitulo" value="<?php echo $_GET['Subtitulo']; ?>">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="CodEvento" value="<?php echo $_GET['CodEvento']; ?>">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="CodUsuario" value="<?php echo $_GET['CodUsuario']; ?>">
              </div>
              <div class="form-group">
                <label for="Fecha">Fecha: </label>
                <input type="date" class="form-control" name="Fecha" value="<?php echo $_GET['Fecha']; ?>">
              </div>
              <div class="form-group">
                <label for="Cuerpo">Cuerpo: </label>
                <input type="text" class="form-control" name="Cuerpo" value="<?php echo $_GET['Cuerpo']; ?>">
              </div>
              <div class="form-group">
                <label for="Imagen">Imagen: </label>
                <input type="text" class="form-control" name="Imagen" value="<?php echo $_GET['Imagen']; ?>">
              </div>

              <div class="form-group">
                <input class="btn btn-default" type="submit" name="enviar" value="Editar Evento">
              </div>
            </form>

            <?php else: ?>

              <?php

              $Titulo = $_POST["Titulo"];
              $Subtitulo = $_POST["Subtitulo"];
              $Cuerpo = $_POST["Cuerpo"];
              $Imagen = $_POST["Imagen"];
              $Fecha = $_POST["Fecha"];
              $CodEvento = $_POST["CodEvento"];
              $CodUsuario = $_POST["CodUsuario"];

              $query= "UPDATE Eventos SET Titulo='$Titulo',
              Subtitulo='$Subtitulo',
              CodEvento='$CodEvento',
              CodUsuario='$CodUsuario',
              Fecha = '$Fecha',
              Cuerpo='$Cuerpo',
              Imagen = '$Imagen'
              WHERE CodEvento = '$CodEvento'";

              echo $query;

              if ($result = $connection->query($query)) {
                echo "<h1>Datos actualizados</h1>";
              } else {
                echo "<h2>Error al actualizar los datos</h2>";
              }
               ?>


            <?php endif ?>



        </div>
      </div>

      <div class="row col-md-12 text-center bg-light">
        <p class="mx-auto">Copyright © Hermandad Sacramental Gran Poder Montellano 2018 Todos los derechos reservados.</p>
      </div>

    </div>

  </body>
</html>
