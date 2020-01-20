function login() {
    event.preventDefault();
    var usuario=$('#usuario').val();
    var pass=$('#pass').val();
   // alert(usuario);
   // alert(pass);
    $.ajax({
        type:'post',
        url:'./controllers/login_controller.php',
        data:{usuario:usuario,pass:pass},
        dataType: 'json'
    })
    .done(function(res){
        if (res.estado==1) {
            $('#cont-login').hide();
            $('#cont-cargando').show();
            switch (parseInt(res.rol)) {
                case 1:
                    location.href='./views/admin/inicio-adm.php';
                    break;
                case 2:
                    location.href='./views/inicio-cliente.php';
                    break;
                case 3:
                    location.href='./views/inicio-ejecutivo.php';
                    break;
                case 4:
                    location.href='./views/';
                    break;
                case 5:
                    location.href='./views/';
                    break;
                case 6:
                    location.href='./views/';
                    break;
                case 7:
                    location.href='./views/';
                    break;
                case 8:
                    location.href='./views/';
                    break;
                case 9:
                    location.href='./views/';
                    break;
                case 10:
                    location.href='./views/';
                    break;
                case 11:
                    location.href='./views/';
                    break;
                case 12:
                    location.href='./views/';
                    break;
                case 13:
                    location.href='./views/';
                    alert("de");
                    break;
            }
        }else{
            $('#error-login').show();
            $('#error-login').html('<i class="fas fa-exclamation-circle"></i> Los datos ingresados son incorrectos');
        }
    })
}