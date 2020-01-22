<?php

require_once('../../models/user_model.php');

$user=new user_model();

$totalUsuarios=$user->totalUsuarios();

$agregadosRrhh=$user->agregadosRrhh();

$emp=$user->tomarDatos();


?>