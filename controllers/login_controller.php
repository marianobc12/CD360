<?php
require_once('../models/user_model.php');

$usuario=$_POST['usuario'];
$pass=$_POST['pass'];

$user=new user_model();



$estado=$user->login($usuario,$pass);

$rol=$_SESSION['rol'];


$arr = array('estado'=>$estado,'rol'=>$rol);

echo json_encode($arr);



?>