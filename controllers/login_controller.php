<?php
require_once('../models/user_model.php');

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

/*$usuario="sdsd";
$pass="dfsdfd";*/

$user=new user_model();

$estado=$user->login($usuario,$pass);


if(!isset($_SESSION['idRol'])){
    $rol=0;    
}else{
    $rol=$_SESSION['idRol'];
}


$arr = array('estado'=>$estado,'rol'=>$rol);

echo json_encode($arr);



?>