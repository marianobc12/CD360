<html lang="es">
<head> <!-- sdfsdfsdfajja para qu-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/all.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Inicio</title>
</head>
<body style="background: url('../img/fondo1.jpg') no-repeat center center fixed; background-size:cover; width:100%; height:100%">
  <div class="container-fluid" style="text-align:center;">
    <div class="row h-100" id="cont-login">
      <div class="col-sm-8 col-xl-5 col-lg-6 col-12 offset-lg-1 offset-sm-1 offset-xl-1 my-auto" style="margin:0px;padding:0px;">
        <div class="rectanguloform animated fadeInLeft " style="box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.75);">
          <div style="text-align:center;">
             <img src="../img/logof.png" class="logo img-fluid">
          </div>
          <hr style="border-top: 1px solid #a9a4a0; width:95%; border-radius:5px;">
          <form class="col-sm-12" method="post" onsubmit="login();">
            <span style="color:#0099ff; font-size:20px;">INICIAR SESIÓN</span>
              <div class="row justify-content-sm-center" style="margin-top:10px;">
                <div class="form-group col-sm-10 col-sm-offset-1">
                  <label><span style="color:#0099ff; font-size:14px;">Usuario</span></label><br>
                  <input class="form-control" type="text" required="" id="usuario" style="font-size:16px;" placeholder="Ingresar usuario...">
                  <span class="fas fa-user iconouser"></span>
                  <br>
                  <label style="margin-top:10px;"><span style="color:#0099ff; font-size:14px;">Contraseña</span></label><br>
                  <input class="form-control" type="password" required="" id="pass" style="font-size:16px;" placeholder="Ingresar contraseña...">
                  <span class="fas fa-lock iconopass"></span>
                  <br>
                  <p class="text-center" style="display:none;color:red;" id="error-login" ></p>
                  <button type="submit" class="submitt btn btn-lg"><i class="fas fa-sign-in-alt"></i> ENTRAR</button><br>
                  <div style="margin-top:15px;">
                    <span style="color:#606060; font-size:16px; ">Recuperar contraseña <a href="">aquí</a></span><br>
                   <!--r <span style="color:#606060; font-size:20px;">Crear cuenta <a href="">aquí</a></span> -->
                  </div> 
                </div>
              </div>
          </form>
          <hr style="border-top: 1px solid #B7B7B7; width:95%; border-radius:5px; margin-top:-20px;">
          <div style="padding-bottom:10px; margin-top:-10px;">
          <span style="color:#606060; font-size:18px;">©2019 Create Design 360</span>
          </div>
        </div>
      </div>  
    </div>
  </div>
    <div class="container h-100" style="display:none;"  id="cont-cargando">
      <div class="row h-100">
        <div class="col-lg-4 offset-lg-4 mx-auto my-auto">
        <div class="cont-cargando mx-auto">
          <img heigh="70" width="70" class="d-block m-auto" src="../img/loading.gif" alt="">
          <h6 class="text-center">ENTRANDO</h6>
        </div>
        </div>
      </div>
    </div>


    <script src="../js/jquery-3.4.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../ajax/funciones.js"></script>
</body>
</html>

<!-- PARA EMPEZAR CON ESTOS ENLACES ESTA IEN , TIENE JQUERY , BOOTSTRAP , LOS ICONOS DE FONT-AWESOME , LAS ANIMACIONES DE ANIMATED CSS , Y HAY UN ARCHIVO ESTILO.CSS 
    QUE AHI PONEMOS EL CSS NUESTRO
-->

<!-- EN ESTA PAGINA TENDRIA QUE IR EL MAQUETADO QUE HICISTE -->

<!-- TESTEE LOS ARCHIVOS INTEGRADOS Y NO ME DIO NINGUNA FALLA EN LA CONSOLA DEL NAVEGADOR... ASI QUE  ESTAN BIEN LINKEADOS -->
<!-- divino-->
<!--Fantabuloso, testeando-->
