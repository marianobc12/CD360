<?php

require_once('../models/user_model.php');

$user=new user_model();

echo $user->login('mariano','ewe');

?>