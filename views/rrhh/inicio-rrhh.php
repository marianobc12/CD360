<?php
session_start();

$rol=$_SESSION['idRol'];

//echo $rol;
if($rol!=7){
  header('Location:../restriccion.php');
}

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
      <!--<li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>-->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-users fa-lg"></i> Mi Perfíl
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#"><i class="fas fa-plus fa-lg"></i> Nuevo personal</a>
          <a class="dropdown-item" href="#"><i class="fas fa-list fa-lg"></i> Lista de personal</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="far fa-user-circle fa-lg"></i> Mi Perfíl
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <p class="dropdown-item mb-0"><b>ROL:&nbsp</b><?php echo strtoupper($_SESSION['nombreRol']); ?></p>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#"><i class="fas fa-id-card-alt fa-lg"></i> Mis Datos</a>
          <a class="dropdown-item" href="#"><i class="fas fa-unlock-alt fa-lg"></i> Seguridad</a>
          <a class="dropdown-item" href="#"><i class="fas fa-arrow-right fa-lg"></i> Cerrar Sesión</a>
        </div>
      </li>
      
    </ul>
  </div>
</nav>
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-6  animated fadeInUp ">
            <img class="d-block m-auto" height="80" width="80" src="../../img/smile.png" alt="">
            <h2 class="text-center saludo msr mt-3">¡Hola <span class="cl3"><?php echo $_SESSION['nombre']; ?> </span> , me alegra verte de nuevo!</h2>
        </div>
        <div class="col-lg-6 animated fadeInRight slow">
            <h2 class="text-center msr cl1"><img style="vertical-align: sub;" src="../../img/add-user.png" width="40" height="40" alt="Ultimos 5 miembros"> Últimos 5 miembros</h2>
            <table class="table table-bordered mt-4">
            <thead>
                <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Rol</th>
                <th scope="col">E-mail</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
                <tr>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                </tr>
                <tr>
            </tbody>
            </table>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-lg-6">
          <h2 class="text-center msr cl1"><img style="vertical-align: sub;" src="../../img/graphic.png" width="40" height="40" alt="Estadistica"> Estadistica</h2>
        </div>
        <div class="col-lg-6">
          <h2 class="text-center msr cl1"><img style="vertical-align: sub;" src="../../img/identification.png" width="40" height="40" alt="Información"> Mi Info</h2>
        </div>
    </div>
</div>
    

<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>