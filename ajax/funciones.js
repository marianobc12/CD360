function login() {
    event.preventDefault();
    var usuario=$('#usuario').val();
    var pass=$('#pass').val();
    alert(usuario);
    alert(pass);
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
        }else{
            $('#error-login').show();
            $('#error-login').html('<i class="fas fa-exclamation-circle"></i> Los datos ingresados son incorrectos');
        }
    })
}