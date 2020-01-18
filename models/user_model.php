<?php
session_start();
require 'db.php';
class user_model{
    private $db;

    public function __construct(){
        $this->db=conexion::conectarDB();
    }

    public function login($user,$password){
        $sql="SELECT * FROM users WHERE user='$user' AND pass='$password' LIMIT 1";
        $res=$this->db->query($sql);
        $existe=mysqli_num_rows($res);
        $user=$res->fetch_assoc();
        if ($existe==1) {
            $_SESSION['rol']=$user['idRol'];
            return 1;
        }else{
            return 0;
        }
    }

    


}





?>