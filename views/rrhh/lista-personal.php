<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/all.min.css">
    <link rel="stylesheet" href="../../css/animate.css">
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>RRHH</title>
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
          <a class="dropdown-item" href="nuevo-usuario.php"><i class="fas fa-plus fa-lg cl3"></i> Nuevo personal</a>
          <a class="dropdown-item" href="#"><i class="fas fa-list fa-lg cl3"></i> Lista de personal</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle fa-lg"></i> Mi Perfíl
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <p class="dropdown-item mb-0"><b>ROL:&nbsp</b><?php echo strtoupper($_SESSION['nombreRol']); ?></p>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-id-card-alt fa-lg cl3"></i> Mis Datos</a>
          <a class="dropdown-item" href="#"><i class="fas fa-unlock-alt fa-lg cl3"></i> Seguridad</a>
          <a class="dropdown-item" href="../cerrar-sesion.php"><i class="fas fa-arrow-right fa-lg cl3"></i> Cerrar Sesión</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>




<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>