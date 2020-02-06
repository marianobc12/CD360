<?php

session_start();

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Seguridad</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" title="Create Desing 360"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users fa-lg"></i> Personal
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="rrhh/nuevo-usuario.php"><i class="fas fa-plus fa-lg cl3"></i> Nuevo personal</a>
          <a class="dropdown-item" href="rrhh/lista-personal.php"><i class="fas fa-list fa-lg cl3"></i> Lista de personal</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle fa-lg"></i> Mi Perfíl
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <p class="dropdown-item mb-0"><b>ROL:&nbsp</b><?php echo strtoupper($_SESSION['nombreRol']); ?></p>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="ver-perfil.php"><i class="fas fa-id-card-alt fa-lg cl3"></i> Mis Datos</a>
          <a class="dropdown-item" href="cambiar-pass.php"><i class="fas fa-unlock-alt fa-lg cl3"></i> Seguridad</a>
          <a class="dropdown-item" href="cerrar-sesion.php"><i class="fas fa-arrow-right fa-lg cl3"></i> Cerrar Sesión</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>

<div class="container">
  <h1 class="text-center cl1 mt-5"><i class="fas fa-id-card-alt fa-lg cl3"></i>  Mis Datos</h1>
  <div class="row mt-4">
    <img style="width:170px;height:170px;" class="d-block m-auto img-thumbnail" src="../img/user2.jpg" alt="">
  </div>
  <form class="col-lg-8 offset-lg-2" action="">
    <div class="row mt-4">
      <div class="col">
        <label for="nombre">Nombre</label>
        <input class="form-control" id="nombre" type="text">
      </div>
      <div class="col">
        <label for="apellido">Apellido</label>
        <input class="form-control" id="apellido" type="text">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label for="fecNac">Fecha de nacimiento</label>
        <input class="form-control" id="fecNac" type="text">
      </div>
      <div class="col">
        <label for="direccion">Dirección</label>
        <input class="form-control" id="direccion" type="text">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label for="telefono">Teléfono</label>
        <input class="form-control" id="telefono" type="text">
      </div>
      <div class="col">
        <label for="celular">Celular</label>
        <input class="form-control" id="celular" type="text">
      </div>
    </div>
    <div class="row mt-4">
      <div class="col">
        <label for="email">E-mail</label>
        <input class="form-control" id="email" type="text">
      </div>
      <div class="col">
        <label for="telFam">Teléfono de familiar</label>
        <input class="form-control" id="telFam" type="text">
      </div>
    </div>
  </form>
</div>
<!--<div class="container">
    <div class="row">
        <div class="col" style="margin-top:15%;">
            <img class="d-block m-auto" src="../img/developer.png" height="150" width="150" alt="">
            <h1 class="text-center cl1">Esta sección se encuentra en desarrollo</h1>
        </div>
    </div>
</div>-->

<script src="../js/jquery-3.4.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>