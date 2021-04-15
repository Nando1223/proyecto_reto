<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Registro Coop</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
<?php
    include "sesion.php";
    ?>
  <main class="d-flex align-items-center min-vh-100 py-5 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/rueda.gif" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body ">

              <?php

              include 'conexion.php';


              //echo json_encode($enlace);
              if (isset($_POST['nombre'])) {

                $nombre = $_POST['nombre'];
                $email = $_POST['email'];
                $contraseña = $_POST['contraseña'];
                $fecha = date("Y-m-d H:i:s");
                $query = "INSERT INTO usuario (user, password, fecha_creacion, fecha_actual) VALUES ('$email', '$contraseña', '$fecha', '$fecha')";
                echo $query;
                try {
                  $resultado = mysqli_query($con, $query);
                  if ($resultado) {
              ?>
                    <script>
                      window.location.assign("index.php")
                    </script>
              <?php
                  }
                } catch (\Throwable $th) {
                  echo $th;
                }
              }


              ?>

              <p class="login-card-description">Registro</p>

              <br>


              <form class="form-horizontal" method="POST" action="registro.php" autocomplete="on">

                <div class="form-group">
                  <label for="Usuario" class="sr-only">Usuario</label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Ingrese un usuario">
                </div>

                <div class="form-group mb-4">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="Ingrese un email">
                </div>


                <div class="form-group">
                  <label for="password" class="sr-only">contraseña</label>
                  <input type="password" name="contraseña" id="email" class="form-control" placeholder="**************">
                </div>

                <br>

                <button class="btn btn-block login-btn mb-4" type="submit" name="registrar" value="registrar">Registrar</button>

              </form>

              </nav>
            </div>
          </div>
        </div>
      </div>



    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>