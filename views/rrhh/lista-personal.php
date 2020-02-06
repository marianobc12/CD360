<?php
session_start();


?>


<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.css">
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
          <a class="dropdown-item" href="nuevo-usuario.php"><i class="fas fa-plus fa-lg cl1"></i> Nuevo personal</a>
          <a class="dropdown-item" href="lista-personal.php"><i class="fas fa-list fa-lg cl1"></i> Lista de personal</a>
        </div>
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

<div class="container-fluid">
  <div class="row">
    <div class="cont-list-emp col mt-5">
      <div class="row">
        <div class="col">
          <img class="d-block m-auto" src="../../img/list-empleados.png" height="80" width="80" alt="">
          <h1 class="text-center cl1">Lista de empleados</h1>
        </div>
      </div>
      <table
            data-toggle="table"
            data-sortable="true"
            data-silent-sort="false"
            data-pagination="true"
            data-search="true"
            data-show-fullscreen="true"
            data-height="650"
            data-locale="es-MX"
            data-show-button-icons="true"
            data-show-pagination-switch="true"
            data-page-size="25"
            data-show-button-text="false"
            data-trim-on-search="false"
            data-show-toggle="true"
            data-show-columns="true"
      >
        <thead>
          <th data-sortable="true">nombre</th>
          <th data-sortable="true">apellido</th>
        </thead>
        <tbody>
          <tr>
            <td>mariano</td>
            <td>flores</td>
          </tr>
          <tr>
            <td>mariano</td>
            <td>flores</td>
          </tr>
          <tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr><tr>
            <td>mariano</td>
            <td>flores</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>



<script src="../../js/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="../../js/bootstrap.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/bootstrap-table.min.js"></script>
<!-- Latest compiled and minified Locales -->
<script src="https://unpkg.com/bootstrap-table@1.15.5/dist/locale/bootstrap-table-es-MX.min.js"></script>
</body>
</html>