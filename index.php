<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/estilo-lading.css">
    <title>Inicio</title>
</head>
<body>
    <?php include 'menu-principal.php'; ?>
    <div id="slide-inicio" class="carousel carousel-fade slide" data-ride="true">
      <!--  <ol class="carousel-indicators">
            <li data-target="#slide-inicio" data-slide-to="0" class="active"></li>
            <li data-target="#slide-inicio" data-slide-to="1"></li>
            <li data-target="#slide-inicio" data-slide-to="2"></li>
        </ol>-->
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img src="img/diseño-slide-1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img src="img/diseño-slide-2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img src="img/diseño-slide-3.jpg" alt="Third slide">
            </div>
        </div>
     <!--   <a class="carousel-control-prev" href="#slide-inicio" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#slide-inicio" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-xl-4 col-lg-4 offset-xl-2 offset-lg-2">
                <h2 class="ft-300">¿Quiénes somos?</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod officiis esse ducimus. Pariatur,
                 asperiores odit commodi est aperiam hic adipisci ad culpa sequi deserunt voluptate placeat perspiciatis
                  nam veritatis quaerat.</p>
                  <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod officiis esse ducimus. Pariatur,
                 asperiores odit commodi est aperiam hic adipisci ad culpa sequi deserunt voluptate placeat perspiciatis
                  nam veritatis quaerat.</p>
            </div>
            <div class="col-xl-4 col-lg-4">
                <img src="img/diseño-slide-1.jpg" height="300" width="100%" alt="">
            </div>
        </div>
    </div>
    
    
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="ajax/funciones.js"></script>
    <script>
        $(function(){
        $('#slide-inicio').carousel({
            interval: 2500
            });
        });
    </script>
</body>
</html>