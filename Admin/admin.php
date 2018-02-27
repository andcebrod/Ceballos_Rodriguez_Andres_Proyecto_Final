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
<link rel="stylesheet" href="css/bootstrap.css">
    <title>Gran Poder Montellano</title>
  </head>
  <body>
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.12';
    fjs.parentNode.insertBefore(js, fjs);} (document, 'script', 'facebook-jssdk'));</script>

    <div class="container">

      <div class="row" id="social">
        <div class="col-md-10" id="social1">
          <span>Bienvenido a la web de Nuestra Hermandad</span>
        </div>
        <div class="col-md-2">
            <button class="btn btn-outline-danger" type="button" name="button"><a href="cerrar_sesion.php">Cerrar Sesión</a></button>
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
              <a class="nav-link" href="../Usuario/articulos.php"><b>Articulos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../Usuario/eventos.php"><b>Eventos</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../Usuario/bienes.php"><b>Bienes</b></a>
            </li>
          </div>

          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../Usuario/archivos.php"><b>Archivos de interés</b></a>
            </li>
          </div>
          <div class="col-md-2">
            <li class="nav-item">
              <a class="nav-link" href="../Usuario/contacto.php"><b>Contacto</b></a>
            </li>
          </div>



        </ul>
      </nav>
      </div>

      <div class="row" class="contenido">
        <div class="col-md-9"  id="contprincipal">
          <table class="table table-striped" id="administracion">
            <thead>
              <tr>
                <th>Tabla</th>
                <th>Opciones a Realizar</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><span>Usuarios </span></td>
                <td>
                  <a href="Usuarios/eliminar_usuarios.php"><img src="Images/delete.png" height="22px" width="22px"></a>
                </td>
              </tr>
              <tr>
                <td><span>Hermanos </span></td>
                <td>
                    <a href="Hermanos/anadir_hermanos.php"><img src="Images/plus.png" height="22px" width="22px"></a>
                    <a href="Hermanos/editar_hermanos.php"><img src="Images/lapiz.png" height="22px" width="22px"></a>
                    <a href="Hermanos/eliminar_hermanos.php"><img src="Images/delete.png" height="22px" width="22px"></a>
                </td>
              </tr>
              <tr>
                <td><span>Articulos </span></td>
                <td>
                  <a href="Articulos/anadir_articulos.php"><img src="Images/plus.png" height="22px" width="22px"></a>
                  <a href="Articulos/editar_articulos.php"><img src="Images/lapiz.png" height="22px" width="22px"></a>
                  <a href="Articulos/eliminar_articulos.php"><img src="Images/delete.png" height="22px" width="22px"></a>
                </td>
              </tr>
              <tr>
                <td><span>Eventos </span></td>
                <td>
                  <a href="Eventos/anadir_eventos.php"><img src="Images/plus.png" height="22px" width="22px"></a>
                  <a href="Eventos/editar_eventos.php"><img src="Images/lapiz.png" height="22px" width="22px"></a>
                  <a href="Eventos/eliminar_eventos.php"><img src="Images/delete.png" height="22px" width="22px"></a>
                </td>
              </tr>
              <tr>
                <td><span>Bienes </span></td>
                <td>
                  <a href="Bienes/anadir_bienes.php"><img src="Images/plus.png" height="22px" width="22px"></a>
                  <a href="Bienes/editar_bienes.php"><img src="Images/lapiz.png" height="22px" width="22px"></a>
                  <a href="Bienes/eliminar_bienes.php"><img src="Images/delete.png" height="22px" width="22px"></a>
                </td>
              </tr>
              <tr>
                <td><span>Archivos</span></td>
                <td>
                  <a href="Archivos/anadir_archivos.php"><img src="Images/plus.png" height="22px" width="22px"></a>
                  <a href="Archivos/editar_archivos.php"><img src="Images/lapiz.png" height="22px" width="22px"></a>
                  <a href="Archivos/eliminar_archivos.php"><img src="Images/delete.png" height="22px" width="22px"></a>
                </td>
              </tr>


            </tbody>
          </table>

        </div>
        <div class=" col-md-3">
          <div class="fb-page col-md-12" data-href="https://www.facebook.com/Hermandad-Sacramental-del-Gran-Poder-Montellano-1850947275184958/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
            <blockquote cite="https://www.facebook.com/Hermandad-Sacramental-del-Gran-Poder-Montellano-1850947275184958/" class="fb-xfbml-parse-ignore">
              <a href="https://www.facebook.com/Hermandad-Sacramental-del-Gran-Poder-Montellano-1850947275184958/"></a>
            </blockquote>
          </div>

          <div class="col-md-12">
          </div>
        </div>

      </div>

      <div class="row col-md-12 text-center bg-light">
        <p class="mx-auto">Copyright © Hermandad Sacramental Gran Poder Montellano 2018 Todos los derechos reservados.</p>

      </div>



    </div>

  </body>
</html>
