function seleccionarPaso(paso){
    switch (paso) {
        case 1:
            $('.cont-datos-personales').hide();
            $('.cont-foto').show();
            break;
        case 2:
            $('.cont-foto').hide();
            $('.cont-datos-personales').show();
            $('.cont-datos-trabajo').hide();
            break;
        case 3:
            $('.cont-datos-personales').hide();
            $('.cont-archivos-personales').hide();
            $('.cont-datos-trabajo').show();
            break;
        case 4:
            $('.cont-datos-trabajo').hide();
            $('.cont-archivos-personales').show();
            break;
        case 5:
            $('.cont-archivos-personales').hide();
            $('.cont-aviso-empleado').show();
            break;
    }
}

function volverAgregarEmpleado(){
    $('.cont-aviso-empleado').hide();
    $('.cont-foto').show();
}

function visualizarImg(){
   /* var rutaImg=$('#foto').val();
    alert(rutaImg);
    $('#fotoMuestra').attr('src',rutaImg);*/
    var preview = document.getElementById('fotoMuestra');
    var file    = $('#foto').get(0).files[0];
    var reader  = new FileReader();
  
    reader.onloadend = function () {
      preview.src = reader.result;
    }
  
    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "../../img/sin-foto.png";
    }
}
