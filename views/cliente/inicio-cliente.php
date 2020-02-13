<?php
  session_start();


?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>Cliente</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
  <a class="navbar-brand" href="#" title="Create Desing 360"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="mis-pedidos.php"> <i class="fas fa-box-open fa-lg"></i> Mis Pedidos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle fa-lg"></i> Mi Perfíl
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <p class="dropdown-item mb-0"><b>ROL:&nbsp</b><?php echo strtoupper($_SESSION['nombreRol']); ?></p>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../ver-perfil.php"><i class="fas fa-id-card-alt fa-lg cl1"></i> Mis Datos</a>
          <a class="dropdown-item" href="../cambiar-pass.php"><i class="fas fa-unlock-alt fa-lg cl1"></i> Seguridad</a>
          <a class="dropdown-item" href="../cerrar-sesion.php"><i class="fas fa-arrow-right fa-lg cl1"></i> Cerrar Sesión</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col animated fadeInUp slow text-center cont-saludo-cliente">
      <h1>Hola <?php echo $_SESSION['nombre'];  ?></h1>
      <h4>Aquí tiene los detalles de tu último pedido</h4>
      <img height="100" width="100" src="../../img/pedido.png" alt="">
    </div>
  </div>
</div>
<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>