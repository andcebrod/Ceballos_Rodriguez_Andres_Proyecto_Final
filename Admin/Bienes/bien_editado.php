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
    <link rel="stylesheet" href="../css/styles.css">
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
            <button class="btn btn-outline-danger" type="button" name="button"><a href="../cerrar_sesion.php">Cerrar Sesión</a></button>
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
              <a class="nav-link" href="../../Usuario/articulos.php"><b>Articulos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/eventos.php"><b>Eventos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/bienes.php"><b>Bienes</b></a>
            </li>
          </div>

          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/archivos.php"><b>Archivos de interés</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../../Usuario/contacto.php"><b>Contacto</b></a>
            </li>
          </div>



        </ul>
      </nav>
      </div>

      <div class="row" class="contenido">
        <div class="col-md-12" id="contprincipal">

          <?php if (!isset($_POST["DNI"])) :?>

            <form method="post">
              <div class="form-group">
                <label for="Titulo">Nombre: </label>
                <input type="text" class="form-control" name="Nombre" value="<?php echo $_GET['Nombre']; ?>">
              </div>
              <div class="form-group">
                <label for="Autor">Autor: </label>
                <input type="text" class="form-control" name="Autor" value="<?php echo $_GET['Autor']; ?>">
              </div>
              <div class="form-group">
                <label for="Material">Material: </label>
                <input type="text" class="form-control" name="Material" value="<?php echo $_GET['Material']; ?>">
              </div>
              <div class="form-group">
                <input type="hidden" class="form-control" name="CodBien" value="<?php echo $_GET['CodBien']; ?>">
              </div>
              <div class="form-group">
                <label for="Fecha">Fecha: </label>
                <input type="date" class="form-control" name="Fecha" value="<?php echo $_GET['Fecha']; ?>">
              </div>
              <div class="form-group">
                <label for="Cuerpo">Descripcion: </label>
                <input type="text" class="form-control" name="Descripcion" value="<?php echo $_GET['Descripcion']; ?>">
              </div>
              <div class="form-group">
                <label for="Imagen">Imagen: </label>
                <input type="text" class="form-control" name="Imagen" value="<?php echo $_GET['Imagen']; ?>">
              </div>

              <div class="form-group">
                <input class="btn btn-default" type="submit" name="enviar" value="Editar Bien">
              </div>
            </form>

            <?php else: ?>

              <?php

              $Nombre = $_POST["Nombre"];
              $Subtitulo = $_POST["Material"];
              $Cuerpo = $_POST["Descripcion"];
              $Autor = $_POST["Autor"];
              $Imagen = $_POST["Imagen"];
              $Fecha = $_POST["Fecha"];
              $CodBien = $POST["CodBien"];


              $query= "UPDATE Eventos SET Nombre='$Nombre', Material='$Material',
              Descripcion='$Descripcion',
              Fecha = '$Fecha',
              Autor='$Autor',
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
