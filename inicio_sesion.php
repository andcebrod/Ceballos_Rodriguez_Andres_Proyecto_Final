<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="signin.css">
<!-- <link rel="stylesheet" href="css/styles.css"> -->
    <title>Gran Poder Montellano</title>
  </head>
  <body class="text-center">
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

          <?php if (!isset($_POST["Correo"])) :?>

        <form class="form-signin" method="post">
          <img class="mb-4" src="escudo.jpg" alt="" width="72" height="72">
          <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
          <label for="inputEmail" class="sr-only">Email address</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="Correo">
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" class="form-control" placeholder="Password" required="" name="Pass">
          </div>
      <button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted">© 2017-2018</p>
        </form>

        <?php else: ?>

          <?php
            $Correo = $_POST['Correo'];
            $Pass = $_POST['Pass'];
            $query = "SELECT * FROM Usuarios WHERE Correo ='".$Correo."' and Pass = md5('".$Pass."')";

            if ($result = $connection->query($query)) {
                while ($obj = $result->fetch_object()) {
                  $Rol = $obj->Rol;
                  $Correo = $obj->Correo;
              //No rows returned
              if ($result->num_rows===0) {
                echo "Datos erróneos. Por favor, inténtelo otra vez.";
              } else {
                //VALID LOGIN. SETTING SESSION VARS
                $_SESSION["Correo"]=$Correo;
                $_SESSION["Rol"]=$Rol;
                if ($_SESSION["Rol"] == "User" ) {
                  header("Location: Usuario/index.php");
                } elseif ($_SESSION["Rol"] == "Admin" ) {
                  header("Location: Admin/admin.php");
                      }
                    }
                }
              }

           ?>

        <?php endif ?>

  </body>
</html>
