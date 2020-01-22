<?php
ob_start();
require_once('../../controllers/user_controller.php');

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
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-lg-6  animated fadeInUp slow mt-5 ">
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
        <div class="col-lg-6 animated fadeInUp slow">
          <h2 class="text-center msr cl1"><img style="vertical-align: sub;" src="../../img/graphic.png" width="40" height="40" alt="Estadistica"> Estadistica</h2>
          <div class="row mt-5">
            <div class="col-lg-3 offset-lg-3">
              <img class="img-fluid d-block m-auto" src="../../img/usuario.png" width="60" height="60" alt="">
              <h4 class="text-center mt-4 msr">Total de usuarios</h4>
              <h2 class="text-center msr"><?php echo $totalUsuarios;  ?></h2>
            </div>
            <div class="col-lg-3">
              <img class="img-fluid d-block m-auto" src="../../img/agregar.png" width="60" height="60" alt="">
              <h4 class="text-center mt-4 msr">Tu agregastes</h4>
              <h2 class="text-center msr"><?php echo $agregadosRrhh;  ?></h2>
            </div>
            </div>
        </div>
        <div class="col-xl-4 offset-xl-1 col-lg-6 animated fadeInRight slow">
          <h2 class="text-center msr cl1"><img style="vertical-align: sub;" src="../../img/identification.png" width="40" height="40" alt="Información"> Mi Info</h2>
          <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
              <img style="width:170px;height:170px;" class="d-block m-auto img-thumbnail" src="../../img/user4.jpg" alt="">
            </div>
            <div class="col msr">
              <h5 class="mt-4"><b>Nombre Completo:</b> <?php echo $emp['apellido'].' '.$emp['nombre'];  ?></h5>
              <h5 class="mt-4"><b>Rol:</b> <?php echo $_SESSION['nombreRol']; ?></h5>
              <h5 class="mt-4"><b>E-mail:</b> <?php echo $emp['email'];?></h5>
              <h5 class="mt-4 mb-5"><b>Celular:</b> <?php echo $emp['celular']; ?></h5>
              <button class="btn btn-lg d-block m-auto btn-op1"><i class="fas fa-chevron-right fa-lg"></i> Ver más</button>
            </div>
          </div>
        </div>
    </div>
</div>
    

<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
</body>
</html>