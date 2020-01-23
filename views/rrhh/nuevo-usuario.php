<?php
session_start();
$rol=$_SESSION['idRol'];

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
<div class="container">
    <div class="row">
        <div class="col-xl-12 cont-foto animated fadeIn slow">
            <h1 class="text-center cl1 mb-2"><img style="vertical-align: sub;"  height="50" src="../../img/pasos.png" alt="Primer paso"> Primer paso</h1>
            <h2 class="text-center msr cl3 mb-5">Sube la foto del empleado</h2>
            <img style="width:170px;height:170px;" class="d-block m-auto img-thumbnail" id="fotoMuestra" src="../../img/sin-foto.png" alt="">
            <div class="mt-5 mb-4">
                <label class="btn btn-lg d-block m-auto btn-op1 btn-foto" style="width:200px" for="foto"><i class="fas fa-plus fa-lg"></i> Agregar foto</label>
                <input class="d-none" type="file" onchange="visualizarImg()" id="foto">
            </div>
            <button class="btn btn-lg d-block m-auto btn-op1"style="width:200px;"  onclick="seleccionarPaso(2)"><i class="fas fa-chevron-right fa-lg"></i> Siguiente</button>
        </div>
        <div class="col-xl-8 offset-xl-2 cont-datos-personales animated fadeIn slow">
            <h1 class="text-center cl1 mb-2"><img style="vertical-align: sub;"  height="50" src="../../img/pasos.png" alt="Primer paso"> Segundo paso</h1>
            <h2 class="text-center msr cl3 mb-5">Completa con los datos del empleado</h2>
            <div class="row">
                <div class="col">
                    <label for="nombre">Nombre</label>
                    <input class="form-control" type="text" id="nombre" required="">
                </div>
                <div class="col">
                    <label for="apellido">Apellido</label>
                    <input class="form-control" type="text" id="apellido" required="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="fechaNacimiento">Fecha de nacimiento</label>
                    <input class="form-control" type="date" id="fechaNacimiento" required="">
                </div>
                <div class="col">
                    <label for="direccion">Dirección</label>
                    <input class="form-control" type="text" id="direccion" required="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="telefono">Teléfono</label>
                    <input class="form-control" type="text" id="telefono" required="">
                </div>
                <div class="col">
                    <label for="celular">Celular</label>
                    <input class="form-control" type="text" id="celular" required="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="email">E-mail</label>
                    <input class="form-control" type="text" id="email" required="">
                </div>
                <div class="col">
                    <label for="telefonoFamiliar">Teléfono de Familiar</label>
                    <input class="form-control" type="text" id="telefonoFamiliar" required="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-lg btn-op1" onclick="seleccionarPaso(1)">Atras</button>
                </div>
                <div class="col">
                    <button class="btn btn-lg btn-op1" onclick="seleccionarPaso(3)">Siguiente</button>
                </div>
            </div>
        </div>
        <div class="col-xl-8 offset-xl-2 cont-datos-trabajo animated fadeIn slow">
            <h1 class="text-center cl1 mb-2"><img style="vertical-align: sub;"  height="50" src="../../img/pasos.png" alt="Primer paso"> Tercer paso</h1>
            <h2 class="text-center msr cl3 mb-5">Completa con los datos del trabajo</h2>
            <div class="row">
                <div class="col">
                    <label for="rol">Rol</label>
                    <select class="form-control" id="rol">
                        <option value=""></option>
                    </select>
                </div>
                <div class="col">
                    <label for="puesto">Puesto</label>
                    <input class="form-control" type="text" id="puesto" required="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="tipoJornada">Tipo jornada</label>
                    <select class="form-control" id="tipoJornada">
                        <option value=""></option>
                    </select>
                </div>
                <div class="col">
                    <label for="salario">Salario</label>
                    <input class="form-control" type="text" id="salario" required="">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <label for="tipoJornada">Horario</label>
                    <select class="form-control" id="tipoJornada">
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col">
                    <button class="btn btn-lg btn-op1" onclick="seleccionarPaso(2)">Atras</button>
                </div>
                <div class="col">
                    <button class="btn btn-lg btn-op1">Siguiente</button>
                </div>
            </div>
        </div>
    </div>
</div>





<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/funciones.js"></script>
</body>
</html>