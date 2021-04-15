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
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-7">
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
                        <br>
                    

                        <h1 class="mt-4">Asignacion de Rutas</h1>

         <?php

            include 'conexion.php';


            //echo json_encode($enlace);
            if (isset($_POST['salida'])) {
            
            $salida=$_POST['salida'];
            $serie=$_POST['serie'];
            $dia=$_POST['dia'];
            $mes=$_POST['mes'];
            $hora=$_POST['hora'];

            $query= "INSERT INTO `rutas`(`salida`,`serie`, `dia`, `mes`, `hora`) VALUES ('$salida','$serie', 'dia', '$mes', '$hora')";

            $resultado = mysqli_query($con, $query);
              } 

              ?>
            


            <br>
            <br>
              <form class="form-horizontal" method="POST"  autocomplete="off">




              <div class="form-group row">
              <label for="example-number-input" class="col-2 col-form-label">Codigo de Bus  </label>
              <div class="col-10">
                <input class="form-control" type="number" value="0023" id="example-number-input" name="serie">
              </div>
            </div>

            <div class="form-group row">
              <label for="example-date-input" class="col-2 col-form-label">Dia</label>
              <div class="col-10">
                <input class="form-control" type="date" value="2021-08-19" id="example-date-input" name="dia">
              </div>
            </div>
            <div class="form-group row">
              <label for="example-month-input" class="col-2 col-form-label">Mes</label>
              <div class="col-10">
                <input class="form-control" type="month" value="2021-09" id="example-month-input" name="mes">
              </div>
            </div>
            
            <div class="form-group row">
              <label for="example-time-input" class="col-2 col-form-label">Hora</label>
              <div class="col-10">
                <input class="form-control" type="time" value="09:45:00" id="example-time-input" name="hora">
              </div>
            </div>
            

             <br>
            
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="index.php" class="btn btn-default">Regresar</a>
                         <button type="submit" class="btn btn-primary">Guardar</button>           
                         <a href="rutas.php" class="btn btn-primary">Nuevo</a>



                    </div>
                </div>
            </form>
        </div>
            <br>
           
 
          <!--Google map-->
            <div id="map-container-google-3" class="z-depth-1-half map-container-3">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d255168.19897294723!2d-80.12018763493465!3d-2.1524948223255445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x902d13cbe855805f%3A0x8015a492f4fca473!2sGuayaquil!5e0!3m2!1ses!2sec!4v1613664797997!5m2!1ses!2sec" width="1500" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

                       

           



                            























                        
                </main>
                <footer class="py-4 bg-light mt-auto">
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
    </body>
</html>
