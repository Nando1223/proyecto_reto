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
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">Coop Nuevo Ecuador</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
           
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#">Settings</a>
                        <a class="dropdown-item" href="#">Activity Log</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="login.php">Logout</a>
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
                            <a class="nav-link" href="index.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-poll"></i></i></div>
                                Inicio

                             <a class="nav-link" href="aportes.php">
                                <div class="sb-nav-link-icon"><i class=""></i></div>
                            </a>



                            <div class="sb-sidenav-menu-heading">Interface</div>
                            
                                

                            <a class="nav-link" href="crear_usuario.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user fa-fw"></i></div>
                                Registro de Usuario
                            </a>


                            <a class="nav-link" href="consulta_usuario.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-circle"></i></div>
                                Consulta de Usuario
                            </a>


                            <a class="nav-link" href="aportes.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt"></i></div>
                                Registro de Aportes
                            </a>


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                



                            <div class="sb-sidenav-menu-heading">Configuracion de rutas</div>
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






                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Start Bootstrap
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Registro de Aportes</h1>


           
          <?php

            include 'conexion.php';


            //echo json_encode($enlace);
            if (isset($_POST['cantidad'])) {
                
            $cantidad=$_POST['cantidad'];
            $nombre=$_POST['nombre'];
            $cedula=$_POST['cedula'];
            $fecha=$_POST['fecha'];

            $query= "INSERT INTO `registro_aportes`(`monto`, `id_persona`, `cedula`, `fecha_ingreso`) VALUES ('$cantidad', '$nombre', '$cedula', '$fecha')";

            $resultado = mysqli_query($con, $query);
              } 

              ?>
            



            <br>
            <br>

            <form class="form-horizontal" method="POST"  autocomplete="off">
               <div class="form-group">
                    <label for="exampleInputPassword1">Registro de cantidad </label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese cantidad" name="cantidad">
              </div>
                
                <br>
            

                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese Nombre" name="nombre">
              </div>


               <br>
            

                <div class="form-group">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Cedula</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingrese cedula" name="cedula">
              </div>
                

            <br>

            
            <div class="form-group row">
                    <label for="exampleInputPassword1">Fecha</label>
                    <input class="form-control" type="date" value="2021-08-19" id="example-date-input" name="fecha" placeholder="Ingrese fecha">
                  </div>

               
            <br>
            
                
               <br>
                
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <a href="index.php" class="btn btn-default">Regresar</a>
                         <button type="submit" class="btn btn-primary">Guardar</button>           
                         <a href="aportes.php" class="btn btn-primary">Nuevo</a>



                    </div>
                </div>
            </form>
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
