<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Coop Nuevo Ecuador</title>
  <link href="css/styles.css" rel="stylesheet" />
  <link href="css/imagen.css" rel="stylesheet" />
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
  <?php
  include "sesion.php";
  ?>
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand" href="inicio.php">Coop Nuevo Ecuador</a>
    <button class="order-1 btn btn-link btn-sm order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->

    <!-- Navbar-->
    <ul class="ml-auto navbar-nav ml-md-7">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="index.php">Logout</a>
        </div>
      </li>
    </ul>
  </nav>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <div class="sb-sidenav-menu-heading">Menu</div>
            <a class="nav-link" href="inicio.php">
              <div class="sb-nav-link-icon"><i class="fas fa-poll"></i></i></div>
              inicio
            </a>

            <div class="sb-sidenav-menu-heading">Contro de Usuarios</div>



            <a class="nav-link" href="crear_usuario.php">
              <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
              Registro de Usuario
            </a>


            <a class="nav-link" href="consulta_user.php">
              <div class="sb-nav-link-icon"><i class="fas fa-clipboard-check"></i></i></div>
              Consulta de Usuario
            </a>

            <div class="sb-sidenav-menu-heading">Contro de Aportes</div>




            <a class="nav-link" href="consulta_usuario.php">
              <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
              Consulta de Aportes
            </a>


            <a class="nav-link" href="aportes.php">
              <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
              Registro de Aportes
            </a>



            <div class="sb-sidenav-menu-heading">Contro de Rutas y Buses</div>


            <a class="nav-link" href="rutas.php">
              <div class="sb-nav-link-icon"><i class="fas fa-map-marker-alt"></i></i></div>
              Nueva Ruta
            </a>

            <a class="nav-link" href="buses.php">
              <div class="sb-nav-link-icon"><i class="fas fa-bus-alt"></i></div>
              Nuevo Bus
            </a>
          </div>
        </div>




      </nav>
    </div>
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid">
          <h1 class="mt-4">Editar Aportes</h1>




          <?php


          include 'conexion.php';

          if (isset($_POST['cantidad'])) {

            $id = $_POST['id'];
            $cantidad = $_POST['cantidad'];
            $nombre = $_POST['nombre'];
            $cedula = $_POST['cedula'];
            $fecha = $_POST['fecha'];
            //$link = "Location: editar.php?id='$id'";


            try {
              $sql = "UPDATE registro_aportes SET monto = '$cantidad', id_persona = '$nombre', cedula = '$cedula', fecha_ingreso = '$fecha' WHERE id = '$id' ";
              $resultado = mysqli_query($con, $sql);
              if ($resultado) {
          ?>
                <script>
                  window.location.assign("consulta_usuario.php")
                </script>
            <?php
              }
            } catch (\Throwable $th) {
              echo $th;
            }
            //header("Location: consulta_usuario.php");

          }


          $id = $_GET["id"] ?? "";

          $query = "SELECT * FROM registro_aportes WHERE id = '$id' ";

          $resultado = mysqli_query($con, $query);

          //var_dump($sql);
          //var_dump($resultado);


          while ($datos = mysqli_fetch_array($resultado)) {
            ?>
            <div>
              <br>
              <br>


              <form method="post">

                <table border="0" cellspacing="0" cellpadding="0" align="center" class="table table-hover">

                  <tr>
                    <th>Cantidad</th>
                    <td>
                      <input type="text" name="cantidad" value="<?php echo $datos['monto'] ?>">
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                    </td>
                  </tr>
                  </tr>
                  <tr>
                    <th>Nombre</th>
                    <td>
                      <input type="text" name="nombre" value="<?php echo $datos['id_persona'] ?>">
                    </td>
                  </tr>
                  <tr>
                    <th width="250">Cedula</th>
                    <td>
                      <input type="text" name="cedula" class="input-number" value="<?php echo $datos['cedula'] ?>">
                    </td>
                  </tr>
                  <tr>
                    <th>Fecha de Ingreso</th>
                    <td>
                      <input type="text" name="fecha" value="<?php echo $datos['fecha_ingreso'] ?>" readonly>



                    </td>
                  </tr>
                </table>
                <center>



                  <button type="submit" class="btn btn-success" name="Registrar">Guardar</button>

                  <a href="consulta_usuario.php" class="btn btn-danger">Cancelar</a>
                </center>
              </form>

            <?php } ?>





























      </main>
      <footer class="py-4 mt-auto bg-light">
        <div class="container-fluid">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Your Website 2020</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="js/scripts.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/chart-area-demo.js"></script>
  <script src="assets/demo/chart-bar-demo.js"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
  <script src="assets/demo/datatables-demo.js"></script>
  <script>
    $('.input-number').on('input', function() {
      this.value = this.value.replace(/[^0-9]/g, '');
    });
  </script>
</body>

</html>