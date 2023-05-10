<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Martin Anduaga">
    <meta name="generator" content="test de login">
    <title>.: Login :.</title>
    <!-- Bootstrap core CSS -->
<link href="./css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="./css/signin.css" rel="stylesheet">
<meta name="theme-color" content="#7952b3">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body class="text-center">  
    <main class="form-signin">
      <?php if (isset($error)): ?>
          <div><?= $error ?></div>
      <?php endif; ?>
      <form name="login" action="validalogin.php" method="POST">
        <img class="mb-4" src="./imgs/login_icon.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Acceso a sistema</h1>

        <div class="form-floating">
          <input type="email" name="username" class="form-control" id="username" placeholder="correo@ejemplo.com">
          <label for="username">Email </label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
          <label for="password">Contraseña</label>
        </div>

        <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> ¿Recordar usuario?
          </label>
        </div>
        <button name="register" class="w-100 btn btn-lg btn-primary" type="submit">Ingresar</button>
        <a href="crear_cuenta.php" type="button">Crear cuenta</a>
        <p class="mt-5 mb-3 text-muted">&copy;ues</p>
      </form>
      <?php
        include("registrar.php");
      ?>  
    </main>
  </body>
</html>