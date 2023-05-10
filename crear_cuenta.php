<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Martin Anduaga">
    <meta name="generator" content="test de login">
    <title>.: Crear Cuenta :.</title>
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
      <form name="login" method="POST">
        <h1 class="h3 mb-3 fw-normal">Crear una Cuenta</h1>
        <label >Datos del Alumno</label>
        <div class="form-floating mb-1">
          <input type="text" name="nombre" class="form-control" id="nombre">
          <label for="nombre">Nombre del alumno</label>
        </div>
        <div class="form-floating mb-1">
          <input type="email" name="username" class="form-control" id="username">
          <label for="username">Email </label>
        </div>
        <div class="form-floating mb-1">
          <input type="password" name="password" class="form-control" id="password">
          <label for="password">Contraseña</label>
        </div>
        <label >Datos de Ingreso</label>
        <div class="form-floating mb-1">
          <input type="text" name="semestre" class="form-control" id="semestre">
          <label for="semestre">Semestre cursando</label>
        </div>
        <div class="form-floating mb-1">
          <input type="text" name="materia1" class="form-control" id="materia1">
          <label for="materia1">Primera Materia</label>
        </div>
        <div class="form-floating mb-1">
          <input type="text" name="materia2" class="form-control" id="materia2">
          <label for="materia2">Segunda Materia</label>
        </div>
        <div class="form-floating mb-1">
          <input type="text" name="materia3" class="form-control" id="materia3">
          <label for="materia3">Tercera Materia</label>
        </div>
        <div class="form-floating">
          <input type="text" name="materia4" class="form-control" id="materia4">
          <label for="materia4">Cuarta Materia</label>
        </div>
        <br>
        <button name="register" class="w-100 btn btn-lg btn-primary" type="submit">Crear</button>
        <a href="login.php" type="button">Iniciar Sesion</a>
        <p class="mt-5 mb-3 text-muted">&copy;ues</p>
      </form>
      <?php
        include("registrar.php");
      ?>  
    </main>
  </body>
</html>