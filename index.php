<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <main class="d-flex align-items-center min-vh-100 py-5 py-md-0">
    <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/images/rueda.gif" alt="login" class="login-card-img" alt="Responsive image">
          </div>
          <div class="col-md-5">
            <div class="card-body">

              <h3> Coop Nuevo Ecuador </h3>

              <br>

              <p class="login-card-description">Inicia sesión en tu cuenta</p>



              <form class="form-horizontal" method="POST" action="sesion.php" autocomplete="on">

                <div class="form-group">
                  <label for="email" class="sr-only">Email</label>
                  <input type="email" name="username" id="email" class="form-control" placeholder="Email address">
                </div>

                <div class="form-group mb-4">
                  <label for="password" class="sr-only">Password</label>
                  <input type="password" name="password" id="password" class="form-control" placeholder="***********">
                </div>


                <br>
                <button class="btn btn-block login-btn mb-4" type="submit" name="login">Ingresar</button>
                
                <p class="login-wrapper-footer-text">¿No tienes una cuenta?
                  <a href="registro.php" class="text-reset">Registrar aquí</a>
                </p>

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