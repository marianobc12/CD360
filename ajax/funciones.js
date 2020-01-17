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
        alert(res.estado);
        if (res.estado==1) {
            alert("acceso");
        }else{
            alert("acceso denegado");
        }
    })
}